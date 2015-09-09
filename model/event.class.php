<?php

class Event {

    public $id;
    public $date;
    public $time;
    public $program;
    public $end_date;
    public $title;
    public $artist;
    public $presenter;
    public $location;
    public $description;
    public $programtext;

    function __construct($event_id, $ev_date, $ev_time, $ev_pro) {
        $this->id = $event_id;
        $this->date = $ev_date;
        $this->time = $ev_time;
        $this->program = $ev_pro;
    }

    function setEndDate($ed) {
        $this->end_date = $ed;
    }

    function setTitle($t) {
        $this->title = $t;
    }

    function setArtist($a) {
        $this->artist = $a;
    }

    function setPresenter($pr) {
        $this->presenter = $pr;
    }

    function setLocation($loc) {
        $this->location = $loc;
    }

    function setDescription($desc) {
        $this->description = $desc;
    }

    function setProgramText($pro) {
        switch ($pro) {
            case 1:
                $this->programtext = 'visual';
                break;
            case 2:
                $this->programtext = 'perflit';
                break;
            case 3:
                $this->programtext = 'media-arts';
                break;
            case 4:
                $this->programtext = 'music';
                break;
            case 5:
                $this->programtext = 'community';
                break;
            case 6:
                $this->programtext = 'special';
                break;
            case 7:
                $this->programtext = 'calls';
                break;
            case 8:
                $this->programtext = 'perflit';
                break;
            default:
                $this->programtext = 'none';
        }
    }

// http://requiremind.com/a-most-simple-php-mvc-beginners-tutorial/
    public static function getAll() {
        $db = Db::getInstance();
        $query = "SELECT * FROM hallwall_org.events WHERE `event_date` >= CURDATE() ORDER BY `event_date`";
        $result = $db->query($query);
        $events = array();
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            //echo $row["ID"] . " " . $row["title"]. "<br>\n";
            $events[$i] = new Event($row["ID"], $row["event_date"], $row["event_time"], $row["program"]);
            $events[$i]->setEndDate($row["event_end_date"]);
            $events[$i]->setTitle($row["title"]);
            $events[$i]->setArtist($row["artist"]);
            $events[$i]->setPresenter($row["co_presenter"]);
            $events[$i]->setLocation($row["location"]);
            $events[$i]->setDescription($row["full_desc"]);
            $events[$i]->setProgramText($row["program"]);
            $i++;
        }
        return $events;
    }

    public static function getBetween($begin, $end) {
        $db = Db::getInstance();
        if (!($query = $db->prepare("SELECT * FROM hallwall_org.events WHERE `event_date` BETWEEN ? AND ? ORDER BY `event_date`"))) {
            echo "Prepare failed: (" . $db->errno . ") " . $db->error;
        }
        // bind parameters
        // 's' because it's a string
        if (!$query->bind_param("ss", $begin, $end)) {
            echo "Binding parameters failed: (" . $query->errno . ") " . $query->error;
        }

        if (!$query->execute()) {
            echo "Execute failed: (" . $query->errno . ") " . $query->error;
        }

        $result = $query->get_result();
        $events = array();
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            //echo $row["ID"] . " " . $row["title"]. "<br>\n";
            $events[$i] = new Event($row["ID"], $row["event_date"], $row["event_time"], $row["program"]);
            $events[$i]->setEndDate($row["event_end_date"]);
            $events[$i]->setTitle($row["title"]);
            $events[$i]->setArtist($row["artist"]);
            $events[$i]->setPresenter($row["co_presenter"]);
            $events[$i]->setLocation($row["location"]);
            $events[$i]->setDescription($row["full_desc"]);
            $events[$i]->setProgramText($row["program"]);
            // etc.
            $i++;
        }
        return $events;
    }

    /* 	
      call it like this from a view script:
      $events = Event::getBetween($_POST['start'],$_POST['end']);
     */
}

//end class
?>
<?php
 
    class Item {

        public $itemName;
        public $itemType;
        public $quantity;
        public $itemPrice;
        public $owner;

        function __construct($itemName, $itemType, $quantity, $itemPrice, $owner) {

            $this->itemName = $itemName;
            $this->itemType = $itemType;
            $this->quantity = $quantity;
            $this->itemPrice = $itemPrice;
            $this->owner = $owner;

        }

        public function createNeed($db) {
            
            $query = "INSERT INTO NeedItem (itemName, itemType, owner) 
                      VALUES('$this->itemName', '$this->itemType', '$this->owner')";
            
            mysqli_query($db, $query);
            $abc = urlencode($this->itemType);
            header("location: SuggestSellItem.php?itemType=$abc");

        }

    }

?>
<?php
Class Dragon_List {
Protected $DragonList = [];

Public function __construct($list){
$this->DragonList = $list;
}

Public function displayList(): Array {
return $this->DragonList;
}

Public function addDragon(string $Dragon_List): void {
Array_push($this->DragonList, $Dragon_List);
}

Public function limitDragon(int $Dragon_List): void {
Array_splice($this->DragonList, $Dragon_List);
}

Public function removeDragon(string $Dragon_List): void {
Array_shift($this->DragonList); 
}

}

$Dragon = new Dragon_List(['Viserion','Rhaegal','Drogon', 'Balerion', 'Nightfury', 'Syrax']);

$Dragon->limitDragon('3');
$Dragon->addDragon('Vhagar');
$Dragon->removeDragon('Rhaegal');

?>

<html>
    <head>
        <style>
            *{
                margin: 0;
                padding: 0;
            }

            body {
                background: linear-gradient(to bottom, #660066 0%, #993366 100%);
                color: khaki;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
                line-height: 1.5;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            table{
                
                justify-content: flex-start;
                border-collapse: separate;
                border-spacing: 10px;
                text-align: center;
                align-items: center;
                width: 50%;
                height: 50%;
                overflow: hidden;
            }

            tr td:hover{
                width: 100px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
                transition: 0.3s;
                cursor: pointer;
                background: linear-gradient(to bottom, #660066 0%, #993366 100%);
                color: goldenrod;
                font-size: 15px;
                font-weight: bold;
               
            }
        </style>
    </head>
    <body>
        <table border="1">
        <tr>
        <td><b>FANTASY DRAGONS</b></td>
        </tr>
            <?php foreach ($Dragon->displayList() as $key => $value):?>
        <tr>
            <td><?php echo $value; ?></td>
        </tr>            
        <?php endforeach;?>
        </table>
    </body>
</html>
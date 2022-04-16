<?php
session_start();
global $dbconn;
dbConnection();
function dbConnection(){
    global $dbconn;
    $dbconn = mysqli_connect("localhost", "root", "", "smp");
    if (!$dbconn) {
        die("Gabim, deshtoi lidhja me bazen e shenimeve" . mysqli_error($dbconn));
    }
}
function login($email,$fjalekalimi){
    global $dbconn;
    $sql = "SELECT * FROM antaret";
    $sql.=" WHERE email='$email' and fjalekalimi='$fjalekalimi'";
    $result = mysqli_query($dbconn, $sql);
    if(mysqli_num_rows($result)==1){
        $antariinfo=mysqli_fetch_assoc($result);
        $anetari=array();
        $anetari['antariid']=$antariinfo['antariid'];
        $anetari['emrimbiemri']=$antariinfo['emri'] . " ". $antariinfo['mbiemri'];
        $anetari['roli']=$antariinfo['roli'];
        $_SESSION['anetari']=$anetari;
        header("Location: punet.php");
        
    }else{
        echo "Nuk ka perdorues me kete kredenciale";
    }
}
/*Funksionet per anetaret */
function merrAnetaret(){
    global $dbconn;
    $sql = "SELECT antariid,emri,mbiemri,email,telefoni FROm antaret";
    return $result = mysqli_query($dbconn, $sql);
}
function merrAnetarId($anetariid){
    global $dbconn;
    $sql = "SELECT antariid,emri,mbiemri,email,telefoni,fjalekalimi FROM antaret";
    $sql.= " WHERE antariid={$anetariid}";
    $result = mysqli_query($dbconn, $sql);
    return $anetari=mysqli_fetch_assoc($result);
}
function shtoAnetar($emri,$mbiemri,$email,$telefoni,$fjalekalimi){
    global $dbconn;
    $sql = "INSERT INTO antaret (emri,mbiemri,email,telefoni,fjalekalimi)";
    $sql .= " VALUES('$emri','$mbiemri','$email','$telefoni','$fjalekalimi') ";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        $_SESSION['message']="Anetari u shtua me sukses";
        header("Location: anetaret.php");
    } else {
        die("Deshtoi shtimi i anetarit" . mysqli_error($dbconn));
    }
}
function modifikoAnetar($anetariid,$emri,$mbiemri,$email,$telefoni,$fjalekalimi){
    global $dbconn;
    $sql = " UPDATE antaret SET emri='$emri', mbiemri='$mbiemri',";
    $sql.=" email='$email',telefoni='$telefoni',fjalekalimi='$fjalekalimi'";
    $sql.=" WHERE antariid=$anetariid";

    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        echo "Anetari u modifkua me sukses";
    } else {
        die("Deshtoi modifikimi i anetarit" . mysqli_error($dbconn));
    }
}
function fshijAnetar($anetariid){
    global $dbconn;
    $sql="DELETE FROM antaret WHERE antariid=$anetariid";
    $result=mysqli_query($dbconn,$sql);

    if($result){
        echo "Anetari u fshij me sukses";        
    }else{
        die("Deshtoi fshirja e anetarit". mysqli_error($dbconn));
    }
}

/*Funksionet per punet */
function merrPunet(){
    global $dbconn;
    $antariid=$_SESSION['anetari']['antariid'];
    $sql = "SELECT p.punaid, pr.emri, p.data, p.pershkrimi";
    $sql.=" FROM punet p INNER JOIN projektet pr  ON p.projektiid=pr.projektiid";
    if($_SESSION['anetari']['roli']!=1){
        $sql.=" WHERE antariid={$antariid}";
    }
    return $result = mysqli_query($dbconn, $sql);
}
function merrPuneId($punaid){
    global $dbconn;
    $sql = "SELECT p.punaid, p.projektiid, pr.emri, p.data, p.pershkrimi";
    $sql.=" FROM punet p INNER JOIN projektet pr  ON p.projektiid=pr.projektiid";
    $sql.= " WHERE punaid={$punaid}";
    $result = mysqli_query($dbconn, $sql);
    return $pune=mysqli_fetch_assoc($result);
}

function shtoPune($projektiid,$data,$pershkrimi){
    global $dbconn;
    $antariid=$_SESSION['anetari']['antariid'];
    $sql = "INSERT INTO punet(antariid,projektiid,data,pershkrimi)";
    $sql .= " VALUES('$antariid','$projektiid','$data','$pershkrimi') ";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        echo "Puna u shtua me sukses";
    } else {
        die("Deshtoi shtimi i punes" . mysqli_error($dbconn));
    }
}

function modifikoPune($punaid,$projektiid, $data, $pershkrimi){
    global $dbconn;
    $sql = " UPDATE punet SET projektiid='$projektiid', data='$data',";
    $sql.=" pershkrimi='$pershkrimi' WHERE punaid=$punaid";

    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        echo "Puna u modifkua me sukses";
    } else {
        die("Deshtoi modifikimi i punes" . mysqli_error($dbconn));
    }
}
/*Funksionet per projektet */
function merrProjektet(){
    global $dbconn;
    $sql = "SELECT * FROM projektet ";
    return $result = mysqli_query($dbconn, $sql);
}
?>
<?php
session_start();
require_once "../templates/db-connect.php";
require_once "../include/functions.inc.php";

<<<<<<< HEAD:include/deleteData.inc.php
if (isset($_GET['pair_id']) && isset($_GET['hosp_id'])) {
=======
require_once("../../../../include/dbConnect.inc.php");
require_once("../../../../include/functions.inc.php");

if(isset($_GET['pair_id']) && isset($_GET['hosp_id'])) {
>>>>>>> 7b03d44a58a02c8674e9bf06d098f3ec0aa6598a:pages/data/overview/include/deleteData.inc.php
  $pair_id = $_GET['pair_id'];
  $patient_id = $pair_id . '-p';
  $donor_id = $pair_id . '-d';

  $pair_id = "'$pair_id'";
  $patient_id = "'$patient_id'";
  $donor_id = "'$donor_id'";

  if (!deletePatientById($conn, $patient_id)) {
    // header("location: ../pages/message.php?error=deletePatient");
    exit();
  }

  if (!deleteDonorById($conn, $donor_id)) {
    // header("location: ../pages/message.php?error=deleteDonor");
    exit();
  }

  if (!deletePairById($conn, $pair_id)) {
    // header("location: ../pages/message.php?error=deleteDonor");
    exit();
  }

  $_SESSION['form'] = 'delete';
  $_SESSION['del_r_id'] = $patient_id;
  $_SESSION['del_d_id'] = $donor_id;
  $_SESSION['status'] = 1;
  $_SESSION['msg'] = "The following pair is successfully deleted!";

  header("location: ../../../message/message.php");

}
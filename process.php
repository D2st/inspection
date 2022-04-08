<?php
header('Content-type: text/html; charset=utf-8');

if ($_POST['print_for'] == 'patient') {
	printForPatient();
} else {
	printForDoctor();
}

function printForPatient() {
	include 'templates/print/patient.php';
}

function printForDoctor() {
	include 'templates/print/doctor.php';
}
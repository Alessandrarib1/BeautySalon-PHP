<?php

    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['dateOfAppointment']) && !empty($_POST['startingTime']) && !empty($_POST['employee']) && !empty($_POST['service'])) {
        require_once("../Model/Appointment.php");
        $appointment = new Appointment();

        $updatedCustomerName = htmlspecialchars($_POST["name"]);
        $updatedEmail = htmlspecialchars($_POST["email"]);
        $updatedDateOfAppointment = htmlspecialchars($_POST["dateOfAppointment"]);
        $updatedStartingTime = htmlspecialchars($_POST["startingTime"]);
        $updatedEmployeeId = htmlspecialchars($_POST['employee']);
        $updatedProductID = htmlspecialchars($_POST['service']);

        $appointment->customerName = $updatedCustomerName;
        $appointment->email = $updatedEmail;
        $appointment->dateOfAppointment = $updatedDateOfAppointment;
        $appointment->startingTime = $updatedStartingTime;
        $appointment->employeeId = $updatedEmployeeId;
        $appointment->productID = $updatedProductID;
        $appointment->id = $_POST['id'];

        require_once("../Service/AppointmentService.php");
        $appointmentService = new AppointmentService();
        $appointmentService->updateAppointment($appointment);
        header("location: /ManagementMainPage");

}
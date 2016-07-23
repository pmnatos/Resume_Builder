<?php
require_once 'connect.php';

$results=$conn->query("CREATE TABLE IF NOT EXISTS USERS (USER_ID int primary key AUTO_INCREMENT,  NAME varchar(50), EMAIL_ID varchar(30) UNIQUE, PASSWORD varchar(32))");
if($results)
{
	echo "Table USERS created<br/>";
}

$results=$conn->query("CREATE TABLE IF NOT EXISTS ADMIN (ADMIN_ID int primary key AUTO_INCREMENT,  NAME varchar(50), EMAIL_ID varchar(30) UNIQUE, PASSWORD varchar(32))");
if($results)
{
	echo "Table ADMIN created<br/>";
}

$results=$conn->query("CREATE TABLE IF NOT EXISTS USER_PHONE_NO (USER_ID int, PHONE_NO varchar(10), constraint PHONE_ID primary key(USER_ID,PHONE_NO))");
if($results)
{
	echo "Table USER_PHONE_NO created<br/>";
}


$results=$conn->query("CREATE TABLE IF NOT EXISTS ACADEMIC_RECORD (RECORD_NO int primary key AUTO_INCREMENT, USER_ID int, COURSE varchar(100), INSTITUTION varchar(100), GRAD_YEAR year, PERCENTAGE float, foreign key(USER_ID) references USERS(USER_ID))");
if($results)
{
	echo "Table ACADEMIC_RECORD created<br/>";
}


$results=$conn->query("CREATE TABLE IF NOT EXISTS DESCRIPTION (USER_ID int primary key, ABOUT text, foreign key(USER_ID) references USERS(USER_ID))");
if($results)
{
	echo "Table DESCRIPTION created<br/>";
}


$results=$conn->query("CREATE TABLE IF NOT EXISTS SKILLS (SKILL_NO int primary key AUTO_INCREMENT, USER_ID int, CATEGORY varchar(100), SKILL_GROUP varchar(100), TITLE varchar(100), foreign key(USER_ID) references USERS(USER_ID))");
if($results)
{
	echo "Table SKILLS created<br/>";
}


$results=$conn->query("CREATE TABLE IF NOT EXISTS PROJECTS (PRJ_NO int primary key AUTO_INCREMENT, USER_ID int, CATEGORY varchar(100), PRJ_NAME varchar(100), PRJ_DESC text, foreign key(USER_ID) references USERS(USER_ID))");
if($results)
{
	echo "Table PROJECTS created<br/>";
}


$results=$conn->query("CREATE TABLE IF NOT EXISTS STRENGTHS (STRENGTH_ID int primary key  AUTO_INCREMENT, USER_ID int, TYPE varchar(100), foreign key(USER_ID) references USERS(USER_ID))");
if($results)
{
	echo "Table STRENGTHS created<br/>";
}


$results=$conn->query("CREATE TABLE IF NOT EXISTS ACHIEVEMENTS (ACH_ID int primary key AUTO_INCREMENT, USER_ID int, DESCRIPTION text, foreign key(USER_ID) references USERS(USER_ID))");
if($results)
{
	echo "Table ACHIEVEMENTS created<br/>";
}


$results=$conn->query("CREATE TABLE IF NOT EXISTS WEB_CONTACT (USER_ID int, WEB_URL varchar(100), constraint WEB_ID primary key(USER_ID,WEB_URL))");
if($results)
{
	echo "Table WEB_CONTACT created<br/>";
}

$results=$conn->query("CREATE TABLE IF NOT EXISTS HOBBIES (USER_ID int, HOBBY_TYPE varchar(100), constraint HOBBY_ID primary key(USER_ID,HOBBY_TYPE))");
if($results)
{
	echo "Table HOBBIES created<br/>";
}

$results=$conn->query("CREATE TABLE IF NOT EXISTS USER_ADDRESS (USER_ID int, ADDRESS varchar(150), constraint ADDRESS_ID primary key(USER_ID,ADDRESS))");
if($results)
{
	echo "Table USER_ADDRESS created<br/>";
}


$results=$conn->query("CREATE TABLE IF NOT EXISTS EXPERIENCES (EXP_ID int primary key AUTO_INCREMENT, USER_ID int, COMPANY varchar(100), DESIGNATION varchar(100), POST_FROM year, POST_TO year, EXP_YEARS int, foreign key(USER_ID) references USERS(USER_ID))");
if($results)
{
	echo "Table EXPERIENCES created<br/>";
}

$results=$conn->query("CREATE TABLE IF NOT EXISTS FINISHED (USER_ID int primary key , STATUS varchar(5), foreign key(USER_ID) references USERS(USER_ID))");
if($results)
{
	echo "Table FINISHED created<br/>";
}


?>
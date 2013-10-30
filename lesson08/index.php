<?php
	/*
	 * Conventions
	 * ===============
	 * 
	 * DB:		loc_orm
	 * Table:	tbl_person
	 * User:	loc_orm
	 * PW:		12341234
	 * ==> @see DAO.class.php
	 */
	require_once("includes/_head.inc.php");
	require_once("includes/DAO.class.php");

	include("includes/RowDataGateway/Post.class.php");

	$post = new Post();
	$post->title = "title";
	$post->content = "some content";
	$post->insert();

	require_once("includes/_tail.inc.php");
?>
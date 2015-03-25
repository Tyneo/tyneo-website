<?php
namespace model;

class Vcard {

	private $firstname;
	private $surname;
	private $nickname;
	private $birthday;
	private $company;
	private $jobtitle;
	private $workbuilding;
	private $workstreet;
	private $worktown;
	private $workpostcode;
	private $workcountry;
	private $worktelephone;
	private $workemail;
	private $workurl;
	private $homebuilding;
	private $homestreet;
	private $hometown;
	private $homepostcode;
	private $homecountry;
	private $hometelephone;
	private $homeemail;
	private $homeurl;
	private $mobile;
	private $notes;

	/**
	  * Get Work postcode
	  *
	  * @return workpostecode
	  */
	public function getWorkpostcode() {
	    return $this->workpostecode;
	}
	
	/**
	 * Set Work postcode
	 *
	 * @param workpostecode Work postcode
	 *
	 * @return workpostecode
	 */
	public function setWorkpostcode($workpostecode) {
	    $this->workpostecode = $workpostecode;
	    return $this;
	}
	
	/**
	  * Get Home postcode
	  *
	  * @return homepostcode
	  */
	public function getHomepostcode() {
	    return $this->homepostcode;
	}
	
	/**
	 * Set Home postcode
	 *
	 * @param homepostcode Home postcode
	 *
	 * @return homepostcode
	 */
	public function setHomepostcode($homepostcode) {
	    $this->homepostcode = $homepostcode;
	    return $this;
	}
	
	/**
	 * Get note
	 *
	 * @return note
	 */
	public function getNote() {
		return $this->note;
	}

	/**
	 * Set note
	 *
	 * @param note note
	 *
	 * @return note
	 */
	public function setNote($note) {
		$this->note = $note;
		return $this;
	}
	/**
	 * Get mobile
	 *
	 * @return mobile
	 */
	public function getMobile() {
		return $this->mobile;
	}

	/**
	 * Set mobile
	 *
	 * @param mobile mobile
	 *
	 * @return mobile
	 */
	public function setMobile($mobile) {
		$this->mobile = $mobile;
		return $this;
	}

	/**
	 * Get workurl
	 *
	 * @return workurl
	 */
	public function getWorkurl() {
		return $this->workurl;
	}

	/**
	 * Set workurl
	 *
	 * @param workurl workurl
	 *
	 * @return workurl
	 */
	public function setWorkurl($workurl) {
		$this->workurl = $workurl;
		return $this;
	}
	/**
	 * Get workemail
	 *
	 * @return workemail
	 */
	public function getWorkemail() {
		return $this->workemail;
	}

	/**
	 * Set workemail
	 *
	 * @param workemail workemail
	 *
	 * @return workemail
	 */
	public function setWorkemail($workemail) {
		$this->workemail = $workemail;
		return $this;
	}

	/**
	 * Get worktelephone
	 *
	 * @return Worktelephone
	 */
	public function getWorktelephone() {
		return $this->Worktelephone;
	}

	/**
	 * Set worktelephone
	 *
	 * @param Worktelephone worktelephone
	 *
	 * @return Worktelephone
	 */
	public function setWorktelephone($Worktelephone) {
		$this->Worktelephone = $Worktelephone;
		return $this;
	}

	/**
	 * Get Workcountry
	 *
	 * @return workcountry
	 */
	public function getWorkcountry() {
		return $this->workcountry;
	}

	/**
	 * Set Workcountry
	 *
	 * @param workcountry Workcountry
	 *
	 * @return workcountry
	 */
	public function setWorkcountry($workcountry) {
		$this->workcountry = $workcountry;
		return $this;
	}
	/**
	 * Get Worktown
	 *
	 * @return worktown
	 */
	public function getWorktown() {
		return $this->worktown;
	}

	/**
	 * Set Worktown
	 *
	 * @param worktown Worktown
	 *
	 * @return worktown
	 */
	public function setWorktown($worktown) {
		$this->worktown = $worktown;
		return $this;
	}
	/**
	 * Get Workstreet
	 *
	 * @return workstreet
	 */
	public function getWorkstreet() {
		return $this->workstreet;
	}

	/**
	 * Set Workstreet
	 *
	 * @param workstreet Workstreet
	 *
	 * @return workstreet
	 */
	public function setWorkstreet($workstreet) {
		$this->workstreet = $workstreet;
		return $this;
	}

	/**
	 * Get WorkBuilding
	 *
	 * @return workbuilding
	 */
	public function getWorkbuilding() {
		return $this->workbuilding;
	}

	/**
	 * Set WorkBuilding
	 *
	 * @param workbuilding WorkBuilding
	 *
	 * @return workbuilding
	 */
	public function setWorkbuilding($workbuilding) {
		$this->workbuilding = $workbuilding;
		return $this;
	}
	/**
	 * Get jobtitle
	 *
	 * @return jobtitle
	 */
	public function getJobtitle() {
		return $this->jobtitle;
	}

	/**
	 * Set jobtitle
	 *
	 * @param jobtitle jobtitle
	 *
	 * @return jobtitle
	 */
	public function setJobtitle($jobtitle) {
		$this->jobtitle = $jobtitle;
		return $this;
	}
	/**
	 * Get Company
	 *
	 * @return company
	 */
	public function getCompany() {
		return $this->company;
	}

	/**
	 * Set Company
	 *
	 * @param company Company
	 *
	 * @return company
	 */
	public function setCompany($company) {
		$this->company = $company;
		return $this;
	}

	/**
	 * Get Birthday
	 *
	 * @return birthday
	 */
	public function getBirthday() {
		return $this->birthday;
	}

	/**
	 * Set Birthday
	 *
	 * @param birthday Birthday
	 *
	 * @return birthday
	 */
	public function setBirthday($birthday) {
		$this->birthday = $birthday;
		return $this;
	}

	/**
	 * Get Nickname
	 *
	 * @return nickname
	 */
	public function getNickname() {
		return $this->nickname;
	}

	/**
	 * Set Nickname
	 *
	 * @param nickname Nickname
	 *
	 * @return nickname
	 */
	public function setNickname($nickname) {
		$this->nickname = $nickname;
		return $this;
	}
	/**
	 * Get Surname
	 *
	 * @return surname
	 */
	public function getSurname() {
		return $this->surname;
	}

	/**
	 * Set Surname
	 *
	 * @param surname Surname
	 *
	 * @return surname
	 */
	public function setSurname($surname) {
		$this->surname = $surname;
		return $this;
	}

	/**
	 * Get Firstnmae
	 *
	 * @return firstname
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * Set Firstnmae
	 *
	 * @param firstname Firstnmae
	 *
	 * @return firstname
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
		return $this;
	}


	/**
	 * Get homeurl
	 *
	 * @return homeurl
	 */
	public function getHomeurl() {
		return $this->homeurl;
	}

	/**
	 * Set homeurl
	 *
	 * @param homeurl homeurl
	 *
	 * @return homeurl
	 */
	public function setHomeurl($homeurl) {
		$this->homeurl = $homeurl;
		return $this;
	}
	/**
	 * Get homeemail
	 *
	 * @return homeemail
	 */
	public function getHomeemail() {
		return $this->homeemail;
	}

	/**
	 * Set homeemail
	 *
	 * @param homeemail homeemail
	 *
	 * @return homeemail
	 */
	public function setHomeemail($homeemail) {
		$this->homeemail = $homeemail;
		return $this;
	}

	/**
	 * Get hometelephone
	 *
	 * @return Hometelephone
	 */
	public function getHometelephone() {
		return $this->Hometelephone;
	}

	/**
	 * Set hometelephone
	 *
	 * @param Hometelephone hometelephone
	 *
	 * @return Hometelephone
	 */
	public function setHometelephone($Hometelephone) {
		$this->Hometelephone = $Hometelephone;
		return $this;
	}

	/**
	 * Get Homecountry
	 *
	 * @return homecountry
	 */
	public function getHomecountry() {
		return $this->homecountry;
	}

	/**
	 * Set Homecountry
	 *
	 * @param homecountry Homecountry
	 *
	 * @return homecountry
	 */
	public function setHomecountry($homecountry) {
		$this->homecountry = $homecountry;
		return $this;
	}
	/**
	 * Get Hometown
	 *
	 * @return hometown
	 */
	public function getHometown() {
		return $this->hometown;
	}

	/**
	 * Set Hometown
	 *
	 * @param hometown Hometown
	 *
	 * @return hometown
	 */
	public function setHometown($hometown) {
		$this->hometown = $hometown;
		return $this;
	}
	/**
	 * Get Homestreet
	 *
	 * @return homestreet
	 */
	public function getHomestreet() {
		return $this->homestreet;
	}

	/**
	 * Set Homestreet
	 *
	 * @param homestreet Homestreet
	 *
	 * @return homestreet
	 */
	public function setHomestreet($homestreet) {
		$this->homestreet = $homestreet;
		return $this;
	}

	/**
	 * Get HomeBuilding
	 *
	 * @return homebuilding
	 */
	public function getHomebuilding() {
		return $this->homebuilding;
	}

	/**
	 * Set HomeBuilding
	 *
	 * @param homebuilding HomeBuilding
	 *
	 * @return homebuilding
	 */
	public function setHomebuilding($homebuilding) {
		$this->homebuilding = $homebuilding;
		return $this;
	}
}
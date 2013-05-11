<?php

class DateTimeHelper {
	public function formatDate($d) {
		if ($d == "")
			return "";
		else
			return date("m/d/Y", strtotime($d));
	}

	public function formatDateTime($d) {
		if ($d == "")
			return "";
		else
			return date("m/d/Y h:i a", strtotime($d));
	}
	
	public function getDateRanges() {
		return array(
			array("Today", $this->getTodayRange()),
			array("Yesterday", $this->getYesterdayRange()),
			array("This Week", $this->getWeekRange(date("Y-m-d"))),
			array("This Month", $this->getThisMonthRange()),
			array("Last Month", $this->getLastMonthRange())
		);
	}

	public function getToday() {
		return date("Y-m-d 00:00:00", time());
	}
	
	public function getTodayRange() {
		return array(date("Y-m-d 00:00:00", time()), date("Y-m-d 23:59:59", time()));
	}

	public function getYesterdayRange() {
		return array(date("Y-m-d 00:00:00", time() - (60 * 60 * 24)), date("Y-m-d 23:59:59", time() - (60 * 60 * 24)));
	}

	public function getThisMonthRange() {
		$start = strtotime(date("Y-m-d"));
		return array(date("Y-m-d 00:00:00", strtotime("first day of this month", $start)), date("Y-m-d 23:59:59", strtotime("last day of this month", $start)));
	}

	public function getLastMonthRange() {
		$start = strtotime(date("Y-m-d"));
		return array(date("Y-m-d 00:00:00", strtotime("first day of last month", $start)), date("Y-m-d 23:59:59", strtotime("last day of last month", $start)));
	}

	public function getMonthsAgoRange($numMonthsAgo) {
		$start = strtotime(date("Y-m-d"));
		return array(date("Y-m-d 00:00:00", strtotime(sprintf("first day of %d months ago", $numMonthsAgo), $start)), date("Y-m-d 23:59:59", strtotime(sprintf("last day of %d months ago", $numMonthsAgo), $start)));
	}

	public function getWeekRange($date) {
		$ts = strtotime($date);
		$start = (date("w", $ts) == 0) ? $ts : strtotime("last sunday", $ts);
		return array(date("Y-m-d 00:00:00", $start), date("Y-m-d 23:59:59", strtotime("next saturday", $start)));
	}

	public function isDate($date) {
		if ($date == "") return false;
		
		$t = strtotime($date);
		$m = date("m", $t);
		$d = date("d", $t);
		$y = date("Y", $t);

		return checkdate ($m, $d, $y);
	}

	public function now() {
		return date("Y-m-d H:i:s", time());
	}
	
	public function sqlDate($d) {
		if ($d == "")
			return "";
		else
			return date("Y-m-d", strtotime($d));
	}

	public function sqlDateTime($d) {
		if ($d == "")
			return "";
		else
			return date("Y-m-d H:i:s", strtotime($d));
	}
}

?>
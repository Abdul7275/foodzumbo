                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                nt_id` = '$event_id' ORDER BY `question_number`" ;
		$result = mysqli_query($database_handler , $sql_query) ;
		$string = '<FORM action = "" method = "POST">' ;
		while ($row = mysqli_fetch_assoc($result)) {
			$question_id = $row['question_id'] ;
			$string .=
			'<LEFT>Q no. ' . $row['question_number'] . '</LEFT><BR /><BR />' . $row['question'] . '<BR /><BR />' ;
			$sql_query = "SELECT * FROM `options` WHERE `question_id` = '$question_id'" ;
			$new_result = mysqli_query($database_handler , $sql_query) ;
			$count = 'a' ;
			$name = 'choice_for_question_' . $row['question_number'] ;
			while ($new_row = mysqli_fetch_assoc($new_result)) {
				$string .= '<INPUT type = "radio" name = "' . $name . '" value ="' . $count .'" />' . $new_row['option'] . '<BR /><BR />' ;
				$count ++ ;
			}
		}
		$string .= '<INPUT type = "submit" value = "Submit!!" /><BR /><BR /></FORM>' ;
		echo $string ;
	}
	//checks the answes submitted by the user
	function check_answers($database_handler , $data , $title , $number_of_questions) {
		$sql_query = "SELECT * FROM `quiz` WHERE `title` = '$title'" ;
		$result = mysqli_query($database_handler , $sql_query) -> fetch_assoc() ;
		$event_id = $result['event_id'] ;
		$question_id = array() ;
		$sql_query = "SELECT * FROM `questions` WHERE `event_id` = '$event_id'" ;
		$result = mysqli_query($database_handler , $sql_query) ;
		while ($row = mysqli_fetch_assoc($result)) {
			$question_id[] = $row['question_id'] ;
		}
		$answer = array() ;
		$count = 1 ;
		while ($count <= $number_of_questions) {
			$id = $question_id[$count - 1] ;
			$sql_query = "SELECT * FROM `answers` WHERE `question_id` = '$id'" ;
			$result = mysqli_query($database_handler , $sql_query) -> fetch_assoc() ;
			$answer['choice_for_question_' . $count] = $result['answer_id'] ;
			$count ++ ;
		}
		$sql_query = "SELECT * FROM `quiz` WHERE `title` = '$title'" ;
		$result = mysqli_query($database_handler , $sql_query) -> fetch_assoc() ;
		$correct = $result['correct'] ;
		$wrong = $result['wrong'] ;
		$score = 0 ;
		foreach ($data as $key => $value) {
			if ($value == $answer[$key]) {
				$score += $correct ;
			} elseif ($value != $answer[$key]) {
				$score -= $wrong ;
			} else {
				$score += 0 ;
			}
		}
		return $score ;
	}
	//stores the score of the user in the database
	function store_score($database_handler , $score_data) {
		$field = '`' . implode('` , `' , array_keys($score_data)) . '`' ;
		$data = '\'' . implode('\' , \'' , $score_data) . '\'' ;
		$name = $score_data['user_name'] ;
		$sql_query = "SELECT * FROM `rank` WHERE `user_name` = '$name'" ;
		$result = mysqli_query($database_handler , $sql_query) -> num_rows ;
		if ($result == 0) {
			$sql_query = "INSERT INTO `rank` ($field) VALUES ($data)" ;
		} else {
			$score = $score_data['score'] ;
			$date = $score_data['date'] ;
			$sql_query = "UPDATE `rank` SET `score` = $score AND `date` = '$date' WHERE `user_name` = '$name'" ;
		}
		mysqli_query($database_handler , $sql_query) ;
	}
	//gets the score of the current user
	function get_score($database_handler , $user_name) {
		$sql_query = "SELECT * FROM `rank` WHERE `user_name` = '$user_name'" ;
		$result = mysqli_query($database_handler , $sql_query) ;
		$number = $result -> num_rows ;
		if ($number == 1) {
			$result = $result -> fetch_assoc() ;
			return $result['score'] ;
		} else {
			return 0 ;
		}
	}
	//displays the quizes
	function display_quizes($database_handler) {
		$count = 1 ;
		$string = '<TABLE class = "table table-striped">
						<TR>
							<TH>S No.</TH>
							<TH>Title</TH>
							<TH>Time Limit</TH>
							<TH>No. of Questions</TH>
							<TH>Status</TH>
						</TR>' ;
		$sql_query = "SELECT * FROM `quiz`" ;
		$result = mysqli_query($database_handler , $sql_query) ;
		while ($row = mysqli_fetch_assoc($result)) {
			$string .= '<TR>
							<TD>' . $count . '</TD>
							<TD>' . $row['title'] . '</TD>
							<TD>' . $row['time'] . ' minutes</TD>
							<TD>' . $row['total'] . '</TD>
							<TD>
								<A href = "login.php?start_quiz=' . $row['event_id'] . '" style = "decoration:none"><IMG src = "../Images/start.png" />
								</A>
							</TD>
						</TR>' ;
			$count ++ ;
		}
		$string .= '</TABLE>' ;
		echo $string ;
	}
?>
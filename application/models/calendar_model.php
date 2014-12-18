	<?php
	class calendar_model extends CI_Model {

		function generate_calendar ($year,$month){

			$pref = array(
				'show_next_prev' => 'TRUE' ,
				'next_prev_url' => base_url().'index.php/calendar/showcal',
				'day_type' => 'long',
				'template' => '{table_open}<table class="calendar">{/table_open}
				{week_day_cell}<th class="day_header">{week_day}</th>{/week_day_cell}
				{cal_cell_content}<span class="day_listing"><span style="color:white;" class="badge">{day}</span></span>&nbsp;<div style="margin-left:5%;">{content}</div>&nbsp;{/cal_cell_content}
				{cal_cell_content_today}<div class="today"><span class="day_listing"><span style="color:white;" class="badge">Today {day}</span></span>&bull; {content}</div>{/cal_cell_content_today}
				{cal_cell_no_content}<span class="day_listing"><span style="color:#7f8c8d;" class="badge">{day}</span></span>&nbsp;{/cal_cell_no_content}
				{cal_cell_no_content_today}<div class="today"><span class="day_listing"><span style="color:#bdc3c7;" class="badge">Today {day}</span></span></div>{/cal_cell_no_content_today}'
				);

			$events = $this->get_events($year,$month);
			$this->load->library('calendar',$pref);
			return $this->calendar->generate($year,$month,$events);
		}

		function getEventsonDay(){
			$yearArray = array();
			$this->db->order_by("date", "desc");
			$query = $this->db->select('date,event')->from('calendar')->like('date',"$year")->get();
			$query = $query->result();
			$caputuredyear = "";

			foreach ($query as $row) {

				$year = (int)substr($row->date,0,4);
				if($caputuredyear != $year){
					$yearArray[] = $year;	
				}				

				$caputuredyear = $year;			
			}
		return $yearArray;
		}

		function geteventyears(){

			$yearArray = array();
			$this->db->order_by("date", "desc");
			$query = $this->db->select('date,event')->from('calendar')->get();
			$query = $query->result();
			$caputuredyear = "";

			foreach ($query as $row) {

				$year = (int)substr($row->date,0,4);
				if($caputuredyear != $year){
					$yearArray[] = $year;	
				}				

				$caputuredyear = $year;			
			}
		return $yearArray;
	}

	function geteventmonths($year){

			$monthArray = array();
			$this->db->order_by("date", "desc");
			$query = $this->db->select('date,event')->from('calendar')->like('date',"$year")->get();
			$query = $query->result();
			$caputuredmonth = "";

			foreach ($query as $row) {

				$month = (int)substr($row->date,5,2);
				if($caputuredmonth != $month){
					$monthArray[] = $month;	
				}				

				$caputuredmonth = $month;			
			}

			if(empty( $monthArray )){
				$month = "There are no events scheduled yet";
				$monthArray[] = $month;	
			}
		return $monthArray;
	}

		function get_events($year,$month) {

			$query = $this->db->query("SELECT DISTINCT DATE_FORMAT(date, '%Y-%m-%e') AS date
                                            FROM calendar
                                            WHERE date LIKE '$year-$month%' "); //date format eliminates zeros make
                                                                           //days look 05 to 5
  
                $cal_data = array();
               
                foreach ($query->result() as $row) { //for every date fetch data
                    $a = array();
                    $i = 0;
                    $query2 = $this->db->query("SELECT event
                                                FROM calendar
                                                WHERE date LIKE DATE_FORMAT('$row->date', '%Y-%m-%d') ");
                                                            //date format change back the date format
                                                            //that fetched earlier
                     foreach ($query2->result() as $r) {
                         $a[$i] = $r->event;     //make data array to put to specific date
                         $i++;                         
                     }
                        $cal_data[substr($row->date,8,2)] = $a;
                    
                }

                return $cal_data;

		}

		function get_calendar_data_year($year,$month)
		{
			$cal_data = array();
			$month = "0".$month;
			$query = $this->db->select('date,event')->from('calendar')->like('date',"$year-$month")->get();
			$query = $query->result(); 
			foreach ($query as $row)
			{
				$day = (int)substr($row->date,8,2);
				$cal_data[(int)$day] = $row->event;
			}
			return $cal_data;
		}

		function generateYear($year,$month)
		{


			$pref = array(
				'month_type' => 'short',
				'day_type' => 'long'
				);

			$this->load->library('calendar',$pref);
			$cal_data = $this->get_calendar_data_year($year,$month);
			return $this->calendar->generate($year,$month,$cal_data);
		}

		public function set_calendarEvent()
{
	$this->load->helper('url');

	$data = array(
		'date' => $this->input->post('date'),
		'event' =>$this->input->post('event')

		);

	return $this->db->insert('calendar', $data);
}

	}
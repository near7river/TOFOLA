<?php

	$english = array(
	
		/**
		 * Menu items and titles
		 */
	
			'poll' => "Poll",
                        'polls:add' => "New Poll",
                        'river:commented:object:poll' => "poll",
			'polls' => "Polls",
			'polls:votes' => "votes",
			'polls:user' => "%s's poll",
			'polls:group_polls' => "Group polls",
			'polls:user:friends' => "%s's friends' poll",
			'polls:your' => "Your polls",
			'polls:not_me' => "%s's polls",
			'polls:posttitle' => "%s's polls: %s",
			'polls:friends' => "Friends' polls",
			'polls:not_me_friends' => "%s's friend's polls",
			'polls:yourfriends' => "Your friends' latest polls",
			'polls:everyone' => "All site polls",
			'polls:read' => "Read poll",
			'polls:addpost' => "Create a poll",
			'polls:editpost' => "Edit a poll",
			'polls:text' => "Poll text",
			'polls:strapline' => "%s",			
			'item:object:poll' => 'Polls',
			'polls:question' => "Poll question",
			'polls:responses' => "Response choices",
			'polls:results' => "[+] Show the results",
			'polls:show_results' => "Show results",
			'polls:show_poll' => "Show poll",
			'polls:add_choice' => "Add response choice",
			'polls:delete_choice' => "Delete this choice",
			'polls:settings:group:title' => "Group polls",
			'polls:settings:group_polls_default' => "yes, on by default",
			'polls:settings:group_polls_not_default' => "yes, off by default",
			'polls:settings:no' => "no",
			'polls:settings:group_profile_display:title' => "If group polls are activated, where should polls content be displayed in group profiles?",
			'polls:settings:group_profile_display_option:left' => "left",
			'polls:settings:group_profile_display_option:right' => "right",
			'polls:settings:group_profile_display_option:none' => "none",
			'polls:settings:group_access:title' => "If group polls are activated, who gets to create polls?",
			'polls:settings:group_access:admins' => "group owners and admins only",
			'polls:settings:group_access:members' => "any group member",
		/**
	     * poll widget
	     **/
			'polls:latest_widget_title' => "Latest community polls",
			'polls:latest_widget_description' => "Displays the most recent polls.",
			'polls:my_widget_title' => "My polls",
			'polls:my_widget_description' => "This widget will display your polls.",
			'polls:widget:label:displaynum' => "How many polls you want to display?",
			'polls:individual' => "Latest poll",
			'poll_individual_group:widget:description' => "Display the latest poll for this group.",
			'poll_individual:widget:description' => "Display your latest poll",
			'polls:widget:no_polls' => "There are no polls for %s yet.",
			'polls:widget:nonefound' => "No polls found.",
			'polls:widget:think' => "Let %s know what you think!",
			'polls:enable_polls' => "Enable polls",
			'polls:group_identifier' => "(in %s)",
			
         /**
	     * poll river
	     **/
	        
	        //generic terms to use
	        'polls:river:created' => "%s created",
	        'polls:river:updated' => "%s updated",
	        'polls:river:posted' => "%s posted",
	        'polls:river:voted' => "%s voted",
	        //these get inserted into the river links to take the user to the entity
	        'polls:river:create' => "a new poll: ",
	        'polls:river:update' => "the poll: ",
	        'poll:river:annotate' => "a comment on this poll",
	        'polls:river:vote' => "on the poll: ",
		/**
		 * Status messages
		 */
	
			'polls:posted' => "Your poll was successfully posted.",
			'polls:responded' => "Thank you for responding, your vote was recorded.",
			'polls:deleted' => "Your poll was successfully deleted.",
			'polls:totalvotes' => "Total number of votes: ",
			'polls:voted' => "Your vote has been cast for this poll. Thank you for voting on this poll.",
			
	
		/**
		 * Error messages
		 */
	
			'polls:save:failure' => "Your poll could not be saved. Please try again.",
			'polls:blank' => "Sorry: you need to fill in both the question and responses before you can make a poll.",
			'polls:novote' => "Sorry: you need to choose an option to vote in this poll.",
			'polls:notfound' => "Sorry: we could not find the specified poll.",
			'polls:nonefound' => "No polls were found from %s",
			'polls:notdeleted' => "Sorry: we could not delete this poll."
	);
					
	add_translation("en",$english);

?>
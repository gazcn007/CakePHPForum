<h1>Create a new post</h1>
<?php
	
	echo $this->Form->create('Post');
	// echo $this->Form->input('user_id');	
	echo $this->Form->input('topic_id'); // topics, Topics, Topic, Topic_id will all work in CakePhp (auto match)
	echo $this->Form->input('body');
	echo $this->Form->end('Create Post');
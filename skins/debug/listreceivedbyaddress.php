<?php
/*
	Bitcoin Webskin - an open source PHP web interface to bitcoind
	Copyright (c) 2011 14STzHS8qjsDPtqpQgcnwWpTaSHadgEewS
*/
?><?php $this->template('header'); ?>
<pre><b>listreceivedbyaddress</b><hr />
<?php 


	isset( $this->listreceivedbyaddress )
		? print_r($this->listreceivedbyaddress)
		: print "Error: listreceivedbyaddress not set";
		
?> 
</pre>
<?php $this->template('footer'); ?>
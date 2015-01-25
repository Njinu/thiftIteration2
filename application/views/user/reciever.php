 <ul class="dropdown-menu message-dropdown">
                        <?php  foreach($message as $rec){


?>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p><?php echo $c["message"];?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                     
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
<div class="container">
    <div class=" pad-top">
        <div class="col-md-7 pad-bottom">
            <div class="chat-box-div">
                <div class="chat-box-head">
                  GROUP CHAT<br><br>
                            <?php if(key_exists('user',$_SESSION) && !empty($_SESSION['user'])):
                             echo "HELLO ". $_SESSION['user']; ?>
                                <form method="post" action="logout.php">
                                <input type="hidden" name="hidden" value="<?php echo $_SESSION['email'] ?>"/>
                                <button  class="btn btn-warning" value="submit" type="submit">LOGOUT</button>
                                </form>
                             <?php endif; ?>
                </div>
               <div id="chat"></div>
                <div class="chat-box-footer">
                        <?php if(key_exists('user',$_SESSION) && !empty($_SESSION['user'])):?>
                            <div class="input-group">
                            <form method="post" action="">
                                   <span class="input-group-btn"> <input type="text" name="msg" class="form-control" placeholder="Enter Text Here...">
                                   <input type="id" name="id" value="<?php echo $_SESSION['id'] ?>"/>
                                <button class="btn btn-info" type="submit">SEND</button> </span>
                            </form>
                            </div>

                        <?php else:?>
                            <h4>Enter Name and Email for start Chatting</h4>
                              <form method="post" action="login.php" class="form-horizontal">
                                  <div class="form-group">
                                      <label for="name" class="col-sm-2 control-label">Name</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="email" class="col-sm-2 control-label">Email</label>
                                      <div class="col-sm-10">
                                          <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                          <button class="btn btn-info" type="submit">LOGIN</button>
                                      </div>
                                  </div>
                            </form>
                        <?php endif;?>
                      </div>

                </div>
            </div>
        </div>
        <div class=" col-md-3 ">
            <div class="chat-box-online-div">
                <div class="chat-box-online-head">
                     USERS
                </div>
                <div class="panel-body chat-box-online">
                    <?php foreach ($get_users->get_users() as $user):?>
                    <div class="chat-box-online-left">
                        <img src="image/avatar.png" class="img-circle">
                        -  <?php echo $user['name']; ?>
                    </div>
                    <hr class="hr-class-low" />
                   <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>

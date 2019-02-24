<?php get_header(); ?>

<main>
    <h1>WakeMeApp</h1>
    <section id="projectsInfo">
        <div id="wrapper">
            WakeMeApp is Android application which I designed to let you wake up on time and be able to check if your friends get up or oversleep.<br>
            This is my very first time to design mobile application.<br>
            Especially considering about the functions that are able to work on the app was the biggest challenge for me.<br>
            <span class="addition">It's coming soon on Google Play store.</span>
        </div>
    </section>
    <section id="projectsDetail">
        <div id="wrapper">
            <div class="page">
                <h2>FRIEND LIST</h2>
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cap_friendList.png" alt="Friend List" />
                    </li>
                </ul>
                <p>Friend list shows your friends who you added.<br>
                Friends who oversleep come top on the list and have bell icon on the right so you immediately understand who you have to wake up.</p>
            </div>
            <div class="page">
                <h2>ADD FRIEND</h2>
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cap_searchFriend.png" alt="Search Friend" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cap_addFriend.png" alt="Add Friend" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cap_addFriendSuccess.png" alt="Add Friend - Success" />
                    </li>
                </ul>
                <p>You can add friends by their email address, and it appears on friend list above.</p>
            </div>
            <div class="page">
                <h2>CHAT ROOM</h2>
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cap_chatRoom.png" alt="Chat Room" />
                    </li>
                </ul>
                <p>The place you can send message to wake your friend up.<br>
                I designed it possible to show if they already read, then you know if they're awake or not.</p>
            </div>
            <div class="page">
                <h2>MY PAGE</h2>
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cap_myPage.png" alt="My Page" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cap_menu.png" alt="Menu" />
                    </li>
                </ul>
                <p>Your information is stored here. You can edit or set alarm anytime just 1 click.</p>
            </div>
            <div class="page">
                <h2>SET TIMER</h2>
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cap_setTimer.png" alt="Set Timer" />
                    </li>
                </ul>
                <p>The point of design is to know when you set time easily.</p>
            </div>
            <div class="page">
                <h2>SIGN IN</h2>
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cap_signIn.png" alt="Sign In" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cap_signUp.png" alt="Sign Up" />
                    </li>
                </ul>
                <p>Sign in / Sign up page. You can do both using Facebook as well!</p>
            </div>
        </div>
    </section>
</main>

<!-- <main>
  
  <p>inquiry.phpテンプレートを利用しています。</p>
   
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
    
    <h1><?php the_title(); ?></h1>
    
    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
    <p><?php the_content(); ?></p>
    
  <?php endwhile; endif; ?>
   
</main> -->

<?php get_footer(); ?>
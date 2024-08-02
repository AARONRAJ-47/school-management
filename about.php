<?php
include('config.php');

if(!isset($_SESSION['email']))
{
header('location:index.php');
}	
?>
<!doctype html>
<head>
<link rel="stylesheet" href="sh.css">
<style>
     
body{
display: flex;
align-items: center; 
justify-content: center; 
font-family: cursive; 
background-color:#008fff;
	 
}
form .input-box input{
  height: 50%;
  width: 50%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid yellow;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
  font-family: cursive; 
}
</style>
</head>
<body>
<nav style="height:100vh;">
<div class="container"> 
  <div class="navbar-header">
  <header>
<ul class="nav-flex-row">
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/home.php" style="text-decoration:none">home</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/about.php" style="text-decoration:none">About</a> </div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/school_tech.php" style="text-decoration:none">teachers</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/screv.php" style="text-decoration:none">students</a></div></li>
<li class="nav-item">
<div style="border-color:pink"><a href="http://localhost/pablo/Aschool/contact.php" style="text-decoration:none">contact</a></div></li>
</ul>
</header>
</div>
</div>
</nav>
<br>
<br>
<div id="wapper" style="height:50vh;"><br>
<article style="text-align:center">
        <section class="gh-content gh-canvas">
		<h1>About My School</h1>
            <!--kg-card-begin: markdown--><p>Here's a collection of school poems that were written for your enjoyment. You'll find poems that talk about the various stages of education, including verses about preschool, kindergarten, primary, middle, and high school. Poetry is a great way to incentivize the students to create a story or to be in the best of their creativity.</p>
<p>One is about going back to school, while another one talks about the first day of school. It's curious to know that the best poems and poets figured out their passion as students in high school.</p>
<p>The verse that talks about the end of the school year is one of the more popular ones.</p>
<p>Hopefully, the funny one will make you laugh, and if t does you can email them to your family and friends.</p>
<p>I think it's important for us to motivate and inspire our children to enjoy school by encouraging them to enjoy learning and helping them excel.</p>
<p>Kids should also have a positive attitude towards school, by realizing it's a fun place where they can socialize with friends, and also be active physically.</p>
<h1 id="apoemaboutschoolforkids"><strong>A Poem about School for Kids</strong></h1>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><p>Let's start off with a very general poem about school for kids. These verses may be shared with children of any age.</p>
<p><strong>School</strong></p>
<p>School is something,<br>
we must all embrace.<br>
Knowledge we need,<br>
to seek out and chase.</p>
<p>Subjects and teaching styles,<br>
are plentiful and vary.<br>
Just like the backpacks,<br>
we all need to carry.</p>
<p>Sports, clubs, and activities,<br>
at every single turn.<br>
So much to do,<br>
study and learn.</p>
<p>To get the most from school,<br>
we should consistently attend.<br>
Around each corner,<br>
there's always a friend.</p>
<p>Our favorite teachers,<br>
are friendly and kind.<br>
Their passion and job,<br>
to expand every mind.</p>
<p>School is something,<br>
we must all embrace.<br>
Just remember to learn,<br>
at your own pace.</p>
<p>By tree.cards</p>
<p>Just the like the last verse states, I strongly believe that children need to be allowed to learn at their own pace.</p>
<p>Personally, I think we test them way too much.</p>
<p>Instead, I think it would be more effective if we allowed them to collaborate more with their fellow classmates.</p>
<p>We should also help them focus on subjects that they are most passionate about.</p>
<p>I'm not saying they don't require a rounded education. They do. But we should allow them to focus the majority of their time on subjects that they truly enjoy.</p>
<p>This would allow them to specialize later on in their education and become great at what they love.</p>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><h1 id="apoemaboutpreschool"><strong>A Poem about Preschool</strong></h1>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><p>The next poem is about preschool. Preschool or nursery school education is very important to any child's early development. This poem may be shared with kids who are currently attending preschool, and is meant to motivate them.</p>
<p><strong>Preschool is Fun</strong></p>
<p>Preschool is very exciting,<br>
and so much fun.<br>
Play with your friends,<br>
smile and run.</p>
<p>Preschool is a place,<br>
where you learn so many things.<br>
Your teacher will tell you,<br>
why birds have wings.</p>
<p>Enjoy cool activities,<br>
using arts and crafts.<br>
Listen to stories,<br>
and share some laughs.</p>
<p>At preschool you get to play,<br>
all these very nice games.<br>
It's really fun learning,<br>
everyone's names.</p>
<p>Just look around,<br>
and you will see so many toys,<br>
Some friends are girls,<br>
and some are boys.</p>
<p>Preschool is great,<br>
have fun when you learn.<br>
Remember to share,<br>
and wait for your turn.</p>
<p>By tree.cards</p>
<p>If your child will be attending preschool soon, or has a hard time adjusting to it, maybe the above poem will help.</p>
<p>You could always print it out, read it to your child, and let him or her color it and decorate it.</p>
<p>Once the masterpiece is complete, you could put it up on their wall and read it prior to bedtime.</p>
<p>Hopefully, something like that will reassure your child that preschool is a happy and fun place to be.</p>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><h1 id="kindergartenschoolpoem"><strong>Kindergarten School Poem</strong></h1>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><p>Now here's a kindergarten poem for those slightly older kids.</p>
<p><strong>Kindergarten</strong></p>
<p>If you made it to kindergarten,<br>
you must be real smart.<br>
You're a funny kid,<br>
that understands art.</p>
<p>Now you're ready,<br>
to learn a lot more.<br>
About giraffes, elephants,<br>
and lions that roar.</p>
<p>Asking questions,<br>
is important and great.<br>
If you wish to grow,<br>
you should finish your plate.</p>
<p>Please remember to listen,<br>
quietly and well.<br>
For that magical,<br>
school bell.</p>
<p>You'll learn about,<br>
science and math.<br>
And the importance of taking,<br>
a regular bath.</p>
<p>Kindergarten is fun,<br>
with friends and teachers.<br>
Your imagination will create,<br>
friendly creatures.</p>
<p>By tree.cards</p>
<p>Kids in kindergarten are prepared for the routine and demands of school life that begins in grade 1. They are taught how to socialize and collaborate with other kids. They're also introduced to math, science, grammar, and other subjects they will be expected to master in the coming years.</p>
<p>They're also encouraged to express and develop their creativity. That's something that kids at that age certainly do not lack.</p>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><h1 id="poemaboutelementaryschool"><strong>Poem About Elementary School</strong></h1>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><p>Here's a poem for all you elementary school kids out there. Some of you may call it primary or grade school.</p>
<p><strong>My School</strong></p>
<p>I really like my school,<br>
and just want to say,<br>
That's where I spend,<br>
most of my day.</p>
<p>Countless activities,<br>
I get to do.<br>
For arts and crafts,<br>
I always use glue.</p>
<p>During math class,<br>
I learn to add and subtract.<br>
ten times ten equals one hundred,<br>
that's an absolute fact.</p>
<p>One of my favorite classes,<br>
is fun and called gym.<br>
I can nearly touch,<br>
that basketball rim.</p>
<p>I also enjoy learning,<br>
difficult words to spell.<br>
My ears are programmed,<br>
for that school bell.</p>
<p>I really like my school,<br>
and just want to say,<br>
I'm always excited,<br>
for the very next day.</p>
<p>By tree.cards</p>
<p>Attending elementary school is often a very exciting stage in a child's educational life. There are lots of ways that kids are engaged during this time. Participating in sports, school events, and learning to socialize with other kids help them gain skills that they'll use throughout their lives.</p>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><h1 id="apoemaboutmiddleschool"><strong>A Poem about Middle School</strong></h1>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><p>The next poem was written for kids who are attending middle school or junior high. This is usually between grade 6 or 7 and grade 9. But this may vary in different countries or states.</p>
<p><strong>Understand</strong></p>
<p>School is often,<br>
a serious affair.<br>
Your teacher expects you,<br>
to sit straight in your chair.</p>
<p>During classes you don't fancy,<br>
you may be sporting a frown.<br>
Just be careful,<br>
your grades may go down.</p>
<p>Education certainly begins,<br>
with a positive attitude.<br>
For this opportunity,<br>
let's show some gratitude.</p>
<p>The trick is to enjoy,<br>
subjects you find curious.<br>
The ones you don't like,<br>
are not injurious.</p>
<p>Remember to physically,<br>
and mentally train.<br>
It all begins,<br>
with your beautiful brain.</p>
<p>Your classmates may need,<br>
a helping hand.<br>
You're a good student,<br>
you understand.</p>
<p>By tree.cards</p>
<p>Sometimes the trick with kids in middle school is to try and motivate them. I think interactive activities and role-playing is a great way to engage kids that get bored easily at school.</p>
<p>I hope the above poem helps you connect with your middle school aged child.</p>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><h1 id="poemabouthighschool"><strong>Poem about High School</strong></h1>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><p>The next poem is about high school, also known as secondary school. It's meant to be funny, but you may be the judge of that.</p>
<p><strong>Complex Condition</strong></p>
<p>High school is certainly,<br>
a complex condition.<br>
It starts off,<br>
as a simple audition.</p>
<p>Right from the hello,<br>
you're instantly judged.<br>
Followed by pressure,<br>
and repeatedly nudged.</p>
<p>Plenty of homework,<br>
to polish each skill.<br>
Some of your friends,<br>
just want you to chill.</p>
<p>Stick to your values,<br>
you personally vowed.<br>
With patience and time,<br>
you'll locate your crowd.</p>
<p>Try to remember,<br>
it's just a few years.<br>
No point of spilling,<br>
all of those tears.</p>
<p>High school is certainly,<br>
a complex condition.<br>
Keep it real,<br>
and finish your mission.</p>
<p>By tree.cards</p>
<p>It's not always easy trying to fit in during your high school years. There are positive and negative influences that teens during those years. They are faced with decisions at every corner, and many of them may affect the rest of their lives.</p>
<p>Personally, I think it's important for teens to find a group of kids that share similar values. It's also a good idea to remain busy by signing up for extracurricular activities such as sports or after school clubs.</p>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><h1 id="afunnypoemaboutschool"><strong>A Funny Poem about School</strong></h1>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><p>The following funny poem about school will apply to any school aged child.</p>
<p><strong>Why We Need School</strong></p>
<p>Please explain,<br>
Why we need school.<br>
Sitting in those desks,<br>
is painful and cruel.</p>
<p>Teachers are there to,<br>
instruct and teach.<br>
Give me an iPad,<br>
and I'll learn at the beach.</p>
<p>Why pay teachers,<br>
let's be frugal.<br>
I'll get my info,<br>
straight from Google.</p>
<p>I just have one more,<br>
challenging request.<br>
Let's get rid of,<br>
exams and that test.</p>
<p>We're curious kids,<br>
knowledge we seek.<br>
Our education system,<br>
we should definitely tweak.</p>
<p>That's my argument,<br>
why we DON'T need school.<br>
Let's make it a law,<br>
or simply a rule.</p>
<p>By tree.cards</p>
<p>I hope you found that poem about school funny. If you're a student, print it out, and entertain your parents with it by reading it to them. I don't think you'll convince them but I'm sure you'll make them laugh.</p>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><h1 id="backtoschoolpoem"><strong>Back to School Poem</strong></h1>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><p>The next one is a back to school poem. It's meant to inspire kids about starting a new school year. Feel free to use it as a form of encouragement. Hang it up on your kid's doors, and read it with them a few times prior to their first day back.</p>
<p><strong>Back To School</strong></p>
<p>Another wonderful school year,<br>
is about to start.<br>
You'll learn new things,<br>
and become very smart.</p>
<p>You'll learn about,<br>
the stars and the moon.<br>
I know you can't wait,<br>
it will happen real soon.</p>
<p>You'll meet new friends,<br>
and have so much fun.<br>
School will feel,<br>
like a huge home run.</p>
<p>Your teachers will help,<br>
you learn so much.<br>
About the French,<br>
British, and Dutch.</p>
<p>You'll also learn about,<br>
Einstein's theory of relativity.<br>
Trying science experiments,<br>
will be an educational activity.</p>
<p>I just have one more,<br>
back to school suggestion.<br>
Remember to raise your hand,<br>
when you have a question.</p>
<p>By tree.cards</p>
<p>That poem is intended to remind young children that going back to school will be fun. They may initially disagree after a wonderfully fun summer vacation. But as parents, we need to motivate them and encourage them to look forward to the upcoming school year.</p>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><h1 id="firstdayofschoolpoem"><strong>First Day of School Poem</strong></h1>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><p>This first day of school poem may be shared with kids entering kindergarten or grade one.</p>
<p><strong>First Day</strong></p>
<p>This will be your very first,<br>
day of school.<br>
It will be fun.<br>
It will be cool.</p>
<p>You'll learn a lot,<br>
and also play.<br>
With new friends,<br>
each school day.</p>
<p>Remember to smile,<br>
and remember to laugh.<br>
You'll listen to stories,<br>
about a yellow giraffe.</p>
<p>During recess you will,<br>
get to play outside.<br>
What's that game,<br>
where you have to hide?</p>
<p>I know you'll enjoy,<br>
your first day of school.<br>
You're a good kid,<br>
that's smart and cool.</p>
<p>By tree.cards</p>
<p>Many children are afraid of the first day of school. That's because it's a change in their environment and they may feel vulnerable and threatened. That's why we must comfort them and prepare them with positive thoughts prior to this day. The trick is to get them all excited about it.</p>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><h1 id="endofschoolpoem"><strong>End of School Poem</strong></h1>
<!--kg-card-end: markdown--><!--kg-card-begin: markdown--><p>The final poem is an end of school poem that talks about the completion of the school year. Share it with any child in elementary or primary school.</p>
<p><strong>End</strong></p>
<p>This school year,<br>
has come to an end.<br>
Say goodbye to each,<br>
teacher and friend.</p>
<p>You've clearly done,<br>
a lot of work.<br>
Summer vacation,<br>
is your reward or perk.</p>
<p>Just remember,<br>
to continue to read.<br>
That will help,<br>
your brain cells feed.</p>
<p>During the summer,<br>
you'll get to relax.<br>
Play outside,<br>
and eat healthy snacks.</p>
<p>Remember to show,<br>
your parents your grades.<br>
Just be honest,<br>
don't hide behind shades.</p>
<p>Your school year,<br>
has reached its end.<br>
Enjoy your summer,<br>
I recommend.</p>
<p>By tree.cards</p>
<p>Most kids look forward to the end of the school year.</p>
<p>That's because they're filled with so much energy, they just want to spend the entire day playing and running around.</p>
<p>Now we've reached the end of the poems about school section.</p>
<p>I hope you found what you were looking for.</p>
<!--kg-card-end: markdown-->
        </section>

</div>
    </article>
	</body>
	</html>
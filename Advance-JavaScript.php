5 Element Access Method:-
document.getElementById('ID')
document.getElementsByTagName('Tag_name')
document.getElementsByClassName('Class_Name')
document.querySelector('css selector')
document.querySelectorAll('css selector')

document.getElementById:-
<p id="first">Hello World</p>
<p id="second">Hello World 2</p>
<script type="text/javascript">
 var result=document.getElementById('second');
 console.log(result);
</script>

6 document.getElementByTagName:-
<h1>This Is Heading One</h1>
<h2>Now</h2>
<p id="first">Good Morning</p>
<script type="text/javascript">
 var result=document.getElementsByTagName('h2');
 console.log(result);
</script>


7 Another Example Of document.getElementsByTagName:-
Mujhe main id ke under jo p tag hai usko access karna hai.
<p id="first">Good Morning</p>
<div id="main">
	<h1>First P Inside Div</h1>
	<p>Second P Inside Div</p>
</div>
<script type="text/javascript">
 var result=document.getElementById('main');
 var result2=result.getElementsByTagName('p');
 console.log(result2);
</script>


8 Length Property:-
How Many P tag Avalable in this document.
<p id="first">Good Morning Suman</p>
<div id="main">
	<h1>First P Inside Div</h1>
	<p>Second P Inside Div</p>
</div>
<script type="text/javascript">
 var res=document.getElementsByTagName('p').length;
 console.log(res);
</script>
Output:- 2


9 use length property in loop:-
All p tag show
<p id="first">Good Morning Suman</p>
<div id="main">
	<h1>First P Inside Div</h1>
	<p>Second P Inside Div</p>
</div>
<script type="text/javascript">
 var len=document.getElementsByTagName('p').length;
 for(var i=0;i<len;i++)
 {
	 var res=document.getElementsByTagName('p')[i];
	 //document.write(res + "<br>");
	 console.log(res);
 }
</script>


10 getElementsByClassName:-
Its Same Like getElementsByTagName.



14 querySelector:-
first come first show. 
first me jo milta hai usko select karta hai
syntex:
querySelector("p");
querySelector("p,h1");//jo pahle milega usko select karega
<p id="first">Good Morning Suman</p>
<p id="first">Good Night Suman</p>
<script type="text/javascript">
 var res=document.querySelector('#first');
 document.write(res);
 console.log(res);
</script>


15 querySelectorAll:-
select All 
querySelectorAll("p");
querySelectorAll("p,h1");
querySelectorAll(".main");
querySelectorAll("p.myclass")//jo p ke under myclass hai
querySelectorAll("p>span.myclass");

niche wale dono ko attribute selector bolte hai:
querySelectorAll("div[id]");// us div ko target karo jisme id ho.
querySelectorAll("div[id='myid']");

<p id="first">Good Morning Suman</p>
<p id="first">Good Night Suman</p>
<script type="text/javascript">
 var res=document.querySelectorAll('#first');
 document.write(res);
 console.log(res);
</script>



16 querySelectorAll specific method:-
main id ke under jo abc class hai sirf usko select karna hai
<div class="abc">Hello</div>
<div id="main">
	<h1 class="abc">First P Inside Div</h1>
	<p class="abc">Second P Inside Div</p>
</div>
<script type="text/javascript">
 var data=document.getElementById('main');
 var res=data.querySelectorAll(".abc");
 document.write(res);
 console.log(res);
</script>

Second method:-
<div class="abc">Hello</div>
<div id="main">
	<h1 class="abc">First P Inside Div</h1>
	<p class="abc">Second P Inside Div</p>
</div>
<script type="text/javascript">
 var res=document.querySelectorAll("#main>.abc");
 document.write(res);
 console.log(res);
</script>


17 querySelectorAll('selector').length:-
<div id="main">
	<h1 class="abc">First P Inside Div</h1>
	<p class="abc">Second P Inside Div</p>
</div>
<script type="text/javascript">
 var res=document.querySelectorAll("#main>.abc").length;
 document.write(res);
 console.log(res);
</script>

18 loop in querySelectorAll:-
<p id="first">Good Night Suman</p>
<div class="abc">Hello</div>
<div id="main">
	<h1 class="abc">First P Inside Div</h1>
	<p class="abc">Second P Inside Div</p>
</div>
<script type="text/javascript">
 var res=document.querySelectorAll(".abc");
 var len=res.length;
 for(var i=0;i<len;i++)
 {
	 console.log(res[i]);
 }
</script>


19 window property:-
how to now document url:
<script>
	console.dir(document.URL);
</script>

How to now domain name:
<script>
	console.dir(document.domain);
</script>
How to now title:-
<script>
	console.dir(document.title);
</script>


20 Property of Node Object:-
nodeName: return the name of the current node as string.
nodeValue: it return or sets the value of current node.
nodeType: it repersents the type of the node.
Document Property:
<script>
	document.write(document.nodeName+"<br>");//#document
	document.write(document.nodeValue+"<br>");//null
	document.write(document.nodeType);//9	
</script>
Element Property:
<script>
	var data=document.getElementById("myid");
	document.write(data.nodeName+"<br>");//h1
	document.write(data.nodeValue+"<br>");//null
	document.write(data.nodeType+"<br>");//1	
</script>
Text property:
<h1 id="myid">I am Learning JS</h1>
<p id="yourid">This is a paragraph</p>
<script>
	var data=document.getElementById("myid");
	document.write(data.firstChild.nodeName+"<br>");//#text
	document.write(data.firstChild.nodeValue+"<br>");//I am Learning AJ
	document.write(data.firstChild.nodeType+"<br>");//3	
</script>


21 Attribute Property:-
name
value
<p id="yourid">This is a paragraph</p>
<script>
	var data=document.getElementById("myid");
	document.write(data.attributes[0].name);//id
	document.write(data.attributes[0].value);//yourid	
	document.write(data.attributes.length);//1 kitna attribute hai total yaha sirf ek ID hai
</script>





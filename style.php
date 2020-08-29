
<style type="text/css">
	body {
		font-size: 16px;
		font-family: monospace;
		color: #000;
		background-color: #FFF;
		background: #ffffff url("images/miami-trans.png") no-repeat right top fixed;
		background-size:cover;
	}

	h1, h2, h3, h4, form {
		font-family:'Shadows Into Light', cursive;
		max-width: 500px;
		background-color: #A2B7CF;
	}

	h1 {
		font-weight: bold;
		font-size: 2em;
		text-transform: capitalize;
	}

	h2 {
		font-weight: bold;
		text-align: center;
	}

	h3 {
		font-weight: bold;
		text-align: left; /* remove since left is the default*/
		margin-top: 30px;
	}

	h4 {
		font-weight: bold;
		text-align: center; /* remove since left is the default*/
		margin-top: 20px;
		color: white;
		background-color: rgba(200, 010, 001, .60);
	}

	p {
		text-indent: 20px;	
		text-align: justify;
		width: 80%; 
	}

	p .italic {
		font-style: italic;
		font-weight: bold;
	}


	ul li {
		list-style-type: none;
		line-height: 200%;
	}

	ol li {
		list-style-type: numbers;
		line-height: 180%;
		width: 65%;
	}

	form {

		font-weight: bold;
		text-align: left;
		margin-left: 5px;
	}

	input, select {
		margin-left: 20px;
		text-align: center;
	}


	#miamiBuilding {
		float: right; margin: 10px; margin-bottom: 50px; margin-right:20%
	}

	#navigation {
		position: absolute;
		z-index: 10;
		width: 210px;
		height: 600px;
		margin: 0;
		border-right: 1px solid #000000;
		font-weight: normal;
	}

	#centerDoc {
		position: absolute;
		z-index: 15;
		padding: 20px 20px/*0 0 */ 20px 20px; /*top right bottom left*/
		margin-top: 50px;
		margin-left: 235px;
		width: 50%;/* 80%*/
		max-width: 1200px;
		min-width: 500px;
	}



	a:link, a:visited  {
		color: #000; 
		text-decoration: none; 
		background-color: #A2B7CF;
		padding-left: 10px;
		display: block;
		width: 145px;
		margin-bottom: 10px;
		border-radius: 10px;
		transition: margin-bottom .45s ease-in;
	}   

	/* mouse over link */
	a:hover { 
		color: #ffffff; 
		background-color: #000;
		margin-bottom: 45px;
	} 

	/* selected link */
	a:active { color: green; font-weight: bold;}

	#centerDoc a {background-color: transparent;}  
	#centerDoc a:link, #centerDoc a:visited  {color: #000; text-decoration: underline;}   
	#centerDoc a:hover { color: #ff0000;  margin-bottom: 0px; } 

	.error {
		color: white;
		background-color: red;
	}

	.joiner h1 {
		display: inline;
	}
</style>

<h1>CSS Navbars</h1>


<ul>
	<li><a href="#home">Home</a></li>
	<li><a href="#news">News</a></li>
	<li><a href="#contact">Contact</a></li>
	<li><a href="#about">About</a></li>
</ul>


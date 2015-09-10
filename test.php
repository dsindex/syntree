<html>
<head>
	<title>Syntax Tree Generator Tests</title>
</head>

<body>
	<a class="example" href="index.php?i=(NP^ Alice)">(NP^ Alice)</a><br />
	<a class="example" href="index.php?i=(NP (N Alice) and (N Bob))">(NP (N Alice) and (N Bob))</a><br />
	<a class="example" href="index.php?i=(S(NP(N Alice))(VP(V is)(NP(N'(N a student)(PP^ of physics)))))">(S(NP(N Alice))(VP(V is)(NP(N'(N a student)(PP^ of physics)))))</a><br />
	<a class="example" href="index.php?i=(CP (NP^-1 What) (C' (C-b did) (IP-2 (NP^ you) (I' (I tr&lt;b&gt;) (VP (V' (V eat) tr&lt;1&gt;))))))">(CP (NP^-1 What) (C' (C-b did) (IP-2 (NP^ you) (I' (I tr&lt;b&gt;) (VP (V' (V eat) tr&lt;1&gt;))))))</a><br />
	<a href="index.php?i=(A (A (A (A A) (A-2 A) (A (A A))) (A-0 A)) (A (A (A (A (A A<0>) A<1>) A<2>) (A (A-1 A<3>) (A A) (A-3 A))) A<0>">Movement 2</a>
	<a href="index.php?i=(A (A (A-0 (A A) (A A) (A (A A))) (A A)) (A (A (A (A (A A) A) A<0>) (A (A A) (A A) (A A))) A">Movement 3</a>
</body>
</html>


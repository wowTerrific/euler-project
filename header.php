<nav class="contain">
  <h3 id="nav-head">My Euler Projects</h3>
  <ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="answers.php">Answers</a></li>
	<li><a href="about.php">About</a></li>
  </ul>
</nav>
<script>
let head = document.getElementById('nav-head');
let shadowArr = [];
for (let i = 1; i < 100; i++) {
    let str = -i+'px '+ -i +'px '+'0 #00A7E1';
    shadowArr.push(str);
}
head.style.textShadow = shadowArr.toString();
</script>

<h2>ELO!</h2>
		<p>
			<b>Dupa</b> to strona dla ludzi, którym się nudzi.
		</p>
		<a href="o dupie.html">Dowiedz się więcej>></a>
		
		<h2 class="naglowek">DLACZEGO DUPA?</h2>
		<p>
		Odpowiedź jest prosta:<b>bo tak</b>
		</p>
		<a href="o dupie.html">Dowiedz się więcej>></a>
		
		<h2 class="naglowek">OSTATNIE WPISY</h2>
		<ul class="wpisy">
		{section name=i loop=$dane.wpisy max=11}
		<li>{$dane.wpisy[i]}</li>
		{/section}
			
		</ul>
		<a href="?dupa=wpisy"> Dodaj wpis>></a>
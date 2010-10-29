<?php /* Smarty version 2.6.26, created on 2010-10-29 08:53:43
         compiled from index.tpl */ ?>
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
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dane']['wpisy']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['max'] = (int)11;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
		<li><?php echo $this->_tpl_vars['dane']['wpisy'][$this->_sections['i']['index']]; ?>
</li>
		<?php endfor; endif; ?>
			
		</ul>
		<a href="?dupa=wpisy"> Dodaj wpis>></a>
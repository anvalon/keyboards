<?php
  $pagename = 'NLCI Oriya WinScript Keyboard Help';
  $pagetitle = 'NLCI Oriya WinScript Keyboard Help';
  require_once('header.php');
?>
<style>

html, body {
    font-family: sans-serif;
    font-size: 100%;
}
samp {
    font-family: Annapurna; 
    font-size:20pt; 
    
}
kbd {
    color:black; 
    font: 0.8em sans-serif; 
    border:solid 1px grey; 
    background:#ccc; 
    margin:2px 1px; 
    padding:2px 3px; 
    -webkit-border-radius: 3px; 
    -moz-border-radius: 3px; 
    border-radius: 3px;
}


/* Table */
.inputSequences {
    border-collapse: collapse;
    font-size: 14px;
    min-width: 592px;
}

.inputSequences th, 
.inputSequences td {
    padding: 7px 17px;
}
/* .inputSequences caption {
    margin: 7px;
} */

/* Table Header */
.inputSequences thead th {
    border-bottom: 2px solid #6ea1cc;
    text-transform: uppercase;
}

/* Table Body */
.inputSequences tbody td {
    border-bottom: 1px solid #e1edff;
    color: #353535;
    text-align: center;
}
.inputSequences tbody tr:nth-child(odd) td {
    background-color: #f4fbff;
}
/* 
.inputSequences tbody td:nth-child(4),
.inputSequences tbody td:first-child,
.inputSequences tbody td:last-child {
    text-align: right;
}
*/
.inputSequences tbody tr:hover td {
    background-color: #ffffa2;
    border-color: #ffff0f;
}

/* Table Footer */
/* 
    .inputSequences tfoot th {
    border-top: 2px solid #6ea1cc;
    text-align: right;
} 
*/


</style>
</head>

<body>
<h1>NLCI Oriya WinScript Keyboard help</h1>

<p>This Keyboard mimic Oriya WinScript Keyboard Layout designed by NLCI in 1988. Several linguists and members of translation community are still using this keyboard layout for keyboarding the text. This is a phonetic based keyboarding system designed with the objective of keyboarding text with minimal keystrokes. Keys are also layed out according the frequency of occurance, yet tried to follow a phonetic based keyboarding system.</p>

<h2>Keyboard layout</h2>

<h2>Default</h2>
<p data-height="500" data-theme-id="0" data-slug-hash="eQrRLK" data-default-tab="result" data-user="binila" data-pen-title="Oriya WinScript Keyman Keyboard Layout" class="codepen">See the Pen <a href="https://codepen.io/binila/pen/eQrRLK/">Oriya WinScript Keyman Keyboard Layout</a> by binilasanki (<a href="https://codepen.io/binila">@binila</a>) on <a href="https://codepen.io">CodePen</a>.</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
<h2>Input sequences</h2>


<table class="inputSequences">
<h3>Special cases</h3>

<thead>
    <tr>
        <th>Keys</th>
        <th>Character</th>
      
  </tr>
</thead>
<tbody>
   
    <tr>
        <td><kbd>i</kbd><kbd>i</kbd>  </td>
        <td>ଈ</td>
        
    </tr>
    <tr>
        <td><kbd>l</kbd><kbd>l</kbd>  </td>
        <td>ଳ</td>
        
    </tr>
    
    
    
    <tr>
        <td><kbd>r</kbd><kbd>r</kbd>  </td>
        <td>ଡ଼</td>
        
    </tr>
    <tr>
        <td><kbd>R</kbd><kbd>R</kbd>  </td>
        <td>ୠ</td>
        
    </tr>



<tr>
       <td><kbd>u</kbd><kbd>u</kbd>  </td>
        <td>ଊ</td>
        
    </tr>

<tr>
       <td><kbd>s</kbd><kbd>s</kbd>  </td>
        <td>ଷ</td>
        
    </tr>

<tr>
       <td><kbd>y</kbd><kbd>y</kbd>  </td>
        <td>ୟ</td>
        
    </tr>

<tr>
       <td><kbd>D</kbd><kbd>D</kbd>  </td>
        <td>ଢ଼</td>
        
    </tr>


<tr>
       <td><kbd>d</kbd><kbd>d</kbd>  </td>
        <td>ଡ଼</td>
        
    </tr>


</tbody>
</table>

<h3>Using = </h3>

<table class="inputSequences">
<thead>
    <tr>
        <th>Keys</th>
        <th>Character</th>
      
  </tr>
</thead>
<tbody>
    <tr>
        <td><kbd>=</kbd><kbd>r</kbd> </td>
        <td>ଡ଼</td>
        
    </tr>
   
</tbody>
</table>

<h3>Vowel Sign Elongation</h3>

<table class="inputSequences">
<thead>
    <tr>
        <th>Keys</th>
        <th>Character</th>
      
  </tr>
</thead>
<tbody>
    <tr>
        <td><kbd>ୀ</kbd><kbd>i</kbd> </td>
        <td>ୀ</td>
        
    </tr>
    <tr>
        <td><kbd>ୂ</kbd><kbd>u</kbd> </td>
        <td>ୂ</td>
        
    </tr>
<tr>
        <td><kbd>ା</kbd><kbd>a</kbd> </td>
        <td>ା</td>
        
    </tr>
</tbody>
</table>



<h3>Virama</h3>

<p> <kbd>X</kbd> is used as virama Eg <kbd>k</kbd> <kbd>X</kbd> <kbd>L</kbd> will generate <samp>କ୍‌ଳ</samp></p>


<h3>Conjuncts</h3>

<p> <kbd>x</kbd> is used as conjuncts Eg <kbd>k</kbd> <kbd>x</kbd> <kbd>l</kbd> will generate <samp>କ୍ଲ</samp></p>

<h3>Numbers</h3>

<p> <kbd>`</kbd> Backtick with number will get Oriya number Eg <kbd>`</kbd> <kbd>1</kbd> will generate <kbd>୧</kbd></p>  

<h3>Backtick for change into English</h3>

<p> <kbd>`</kbd> Backtick is used to change into English Eg <kbd>`</kbd> <kbd>ତ</kbd> will generate <kbd>q</kbd></p>  


</body>

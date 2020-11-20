<h1 align="center">Bootstrap 4 + WordPress utilizando o Gulp e o Sass</h1>
<p align="center">Passo-a-passo com as etapas para criar temas do WordPress com Bootstrap</p>

<h2>Pré-Requisitos:</h2> 

- <a href="https://sass-lang.com/install">Sass</a> 
- <a href="https://nodejs.org/en/">node.js</a>
- <a href="https://nodejs.org/en/">npm</a>
- <a href="https://gulpjs.com/docs/en/getting-started/quick-start">gulp</a>


<h2>Passo-a-passo:</h2>

Dentro da pasta de layout:

<pre><code>npm init</code></pre>
<pre><code>npm install boostrap</code></pre>
<pre><code>npm install jquery</code></pre>
<pre><code>npm install popper.js</code></pre>
<pre><code>npm install gulp --save-dev</code></pre>
<pre><code>npm install gulp-sass</code></pre>

<h2>Pastas e arquivos para serem criadas dentro da pasta layout:</h2>

src
 - assets
 - css
 - js
 - scss
 - index.html

<pre><code>Inserir dentro da pasta js criada, os módulos na pasta dist do bootstrap, popper (o do pooper fica dentro da pasta umd) e jquery</code></pre>

<p>Dentro da tag &lt;head&gt; do arquivo <strong>index.html</strong> criado na raíz da pasta <strong>layout</strong> </p>

<pre><code>Alterar o caminho do CSS do Bootstrap utilizando CDN, para: css/bootstrap.css</code></pre>
<pre><code>Criar o caminho: css/style.css</code></pre>

<p>Antes do fechamento da tag &lt;/body&gt;, na sequência abaixo, a ordem não pode ser alterada</p>
<pre><code>Inserir o caminho do JS do jquery</code></pre>
<pre><code>Inserir o caminho do JS do popper.js</code></pre>
<pre><code>Inserir o caminho do JS do bootstrap</code></pre>

<h2>Criar as tasks com o gulp para automatizar o desenvolvimento</h2>
<pre><code>Criar o gulfile.js dentro da raíz da pasta layout</pre></code>
<pre><code>Executar o comando gulp no CMD</pre></code>

<h2>Para importar o Bootstrap para o arquivo style.css dentro da pasta css utilizando o gulp e o scss:</h2> 
<p>No arquivo scss/style.scss, executar o comando:</p>
<pre><code>@import "node_modules/bootstrap/scss/bootstrap";</code></pre>

<strong>Observação: As cores personalizadas no BS4 devem vir antes do @import no arquivo style.scss<strong>

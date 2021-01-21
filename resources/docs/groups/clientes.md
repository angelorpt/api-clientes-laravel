# Clientes


## Listar




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/clientes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clientes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

[]
```
<div id="execution-results-GETapi-clientes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-clientes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-clientes"></code></pre>
</div>
<div id="execution-error-GETapi-clientes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-clientes"></code></pre>
</div>
<form id="form-GETapi-clientes" data-method="GET" data-path="api/clientes" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-clientes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/clientes</code></b>
</p>
</form>


## Salvar




> Example request:

```bash
curl -X POST \
    "http://localhost/api/clientes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":1,"nome":"Maria da Silva","cpf":"999.999.999-99","rg":"1234567-8","email":"joao@email.com","fone1":"(92) 9999-9999","fone2":"(92) 8888-8888","nascimento":"01\/01\/2020","sexo":"M","cep":"01001000","rua":"Pra\u00e7a da S\u00e9","complemento":"lado \u00edmpar","bairro":"S\u00e9","cidade":"S\u00e3o Paulo","uf":"SP","ddd":"11"}'

```

```javascript
const url = new URL(
    "http://localhost/api/clientes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 1,
    "nome": "Maria da Silva",
    "cpf": "999.999.999-99",
    "rg": "1234567-8",
    "email": "joao@email.com",
    "fone1": "(92) 9999-9999",
    "fone2": "(92) 8888-8888",
    "nascimento": "01\/01\/2020",
    "sexo": "M",
    "cep": "01001000",
    "rua": "Pra\u00e7a da S\u00e9",
    "complemento": "lado \u00edmpar",
    "bairro": "S\u00e9",
    "cidade": "S\u00e3o Paulo",
    "uf": "SP",
    "ddd": "11"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-clientes" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-clientes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-clientes"></code></pre>
</div>
<div id="execution-error-POSTapi-clientes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-clientes"></code></pre>
</div>
<form id="form-POSTapi-clientes" data-method="POST" data-path="api/clientes" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-clientes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/clientes</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-clientes" data-component="body"  hidden>
<br>
optional  ID do Cliente.</p>
<p>
<b><code>nome</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nome" data-endpoint="POSTapi-clientes" data-component="body" required  hidden>
<br>
Nome.</p>
<p>
<b><code>cpf</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cpf" data-endpoint="POSTapi-clientes" data-component="body" required  hidden>
<br>
CPF.</p>
<p>
<b><code>rg</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="rg" data-endpoint="POSTapi-clientes" data-component="body"  hidden>
<br>
optional  RG.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-clientes" data-component="body" required  hidden>
<br>
Email.</p>
<p>
<b><code>fone1</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fone1" data-endpoint="POSTapi-clientes" data-component="body"  hidden>
<br>
optional  Fone1.</p>
<p>
<b><code>fone2</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fone2" data-endpoint="POSTapi-clientes" data-component="body"  hidden>
<br>
optional  Fone2.</p>
<p>
<b><code>nascimento</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
<input type="text" name="nascimento" data-endpoint="POSTapi-clientes" data-component="body"  hidden>
<br>
optional  Nascimento.</p>
<p>
<b><code>sexo</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sexo" data-endpoint="POSTapi-clientes" data-component="body"  hidden>
<br>
optional  Sexo.</p>
<p>
<b><code>cep</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cep" data-endpoint="POSTapi-clientes" data-component="body" required  hidden>
<br>
CEP.</p>
<p>
<b><code>rua</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="rua" data-endpoint="POSTapi-clientes" data-component="body"  hidden>
<br>
optional  Rua.</p>
<p>
<b><code>complemento</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="complemento" data-endpoint="POSTapi-clientes" data-component="body"  hidden>
<br>
optional  Complemento.</p>
<p>
<b><code>bairro</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="bairro" data-endpoint="POSTapi-clientes" data-component="body"  hidden>
<br>
optional  Bairro.</p>
<p>
<b><code>cidade</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cidade" data-endpoint="POSTapi-clientes" data-component="body"  hidden>
<br>
optional  Cidade.</p>
<p>
<b><code>uf</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="uf" data-endpoint="POSTapi-clientes" data-component="body"  hidden>
<br>
optional  AM.</p>
<p>
<b><code>ddd</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="ddd" data-endpoint="POSTapi-clientes" data-component="body"  hidden>
<br>
optional  DDD.</p>

</form>


## Consultar




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/clientes/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clientes/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "success": false,
    "message": "Cliente não encontrado"
}
```
<div id="execution-results-GETapi-clientes--cliente-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-clientes--cliente-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-clientes--cliente-"></code></pre>
</div>
<div id="execution-error-GETapi-clientes--cliente-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-clientes--cliente-"></code></pre>
</div>
<form id="form-GETapi-clientes--cliente-" data-method="GET" data-path="api/clientes/{cliente}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-clientes--cliente-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/clientes/{cliente}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>cliente</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cliente" data-endpoint="GETapi-clientes--cliente-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-clientes--cliente-" data-component="url" required  hidden>
<br>
ID do Cliente.</p>
</form>


## Atualizar




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/clientes/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":1,"nome":"Maria da Silva","cpf":"999.999.999-99","rg":"1234567-8","email":"joao@email.com","fone1":"(92) 9999-9999","fone2":"(92) 8888-8888","nascimento":"01\/01\/2020","sexo":"M","cep":"01001000","rua":"Pra\u00e7a da S\u00e9","complemento":"lado \u00edmpar","bairro":"S\u00e9","cidade":"S\u00e3o Paulo","uf":"SP","ddd":"11"}'

```

```javascript
const url = new URL(
    "http://localhost/api/clientes/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 1,
    "nome": "Maria da Silva",
    "cpf": "999.999.999-99",
    "rg": "1234567-8",
    "email": "joao@email.com",
    "fone1": "(92) 9999-9999",
    "fone2": "(92) 8888-8888",
    "nascimento": "01\/01\/2020",
    "sexo": "M",
    "cep": "01001000",
    "rua": "Pra\u00e7a da S\u00e9",
    "complemento": "lado \u00edmpar",
    "bairro": "S\u00e9",
    "cidade": "S\u00e3o Paulo",
    "uf": "SP",
    "ddd": "11"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-clientes--cliente-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-clientes--cliente-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-clientes--cliente-"></code></pre>
</div>
<div id="execution-error-PUTapi-clientes--cliente-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-clientes--cliente-"></code></pre>
</div>
<form id="form-PUTapi-clientes--cliente-" data-method="PUT" data-path="api/clientes/{cliente}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-clientes--cliente-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/clientes/{cliente}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/clientes/{cliente}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>cliente</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cliente" data-endpoint="PUTapi-clientes--cliente-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-clientes--cliente-" data-component="url" required  hidden>
<br>
ID do Cliente.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-clientes--cliente-" data-component="body"  hidden>
<br>
optional  ID do Cliente.</p>
<p>
<b><code>nome</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nome" data-endpoint="PUTapi-clientes--cliente-" data-component="body" required  hidden>
<br>
Nome.</p>
<p>
<b><code>cpf</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cpf" data-endpoint="PUTapi-clientes--cliente-" data-component="body" required  hidden>
<br>
CPF.</p>
<p>
<b><code>rg</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="rg" data-endpoint="PUTapi-clientes--cliente-" data-component="body"  hidden>
<br>
optional  RG.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-clientes--cliente-" data-component="body" required  hidden>
<br>
Email.</p>
<p>
<b><code>fone1</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fone1" data-endpoint="PUTapi-clientes--cliente-" data-component="body"  hidden>
<br>
optional  Fone1.</p>
<p>
<b><code>fone2</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fone2" data-endpoint="PUTapi-clientes--cliente-" data-component="body"  hidden>
<br>
optional  Fone2.</p>
<p>
<b><code>nascimento</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
<input type="text" name="nascimento" data-endpoint="PUTapi-clientes--cliente-" data-component="body"  hidden>
<br>
optional  Nascimento.</p>
<p>
<b><code>sexo</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sexo" data-endpoint="PUTapi-clientes--cliente-" data-component="body"  hidden>
<br>
optional  Sexo.</p>
<p>
<b><code>cep</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cep" data-endpoint="PUTapi-clientes--cliente-" data-component="body" required  hidden>
<br>
CEP.</p>
<p>
<b><code>rua</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="rua" data-endpoint="PUTapi-clientes--cliente-" data-component="body"  hidden>
<br>
optional  Rua.</p>
<p>
<b><code>complemento</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="complemento" data-endpoint="PUTapi-clientes--cliente-" data-component="body"  hidden>
<br>
optional  Complemento.</p>
<p>
<b><code>bairro</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="bairro" data-endpoint="PUTapi-clientes--cliente-" data-component="body"  hidden>
<br>
optional  Bairro.</p>
<p>
<b><code>cidade</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cidade" data-endpoint="PUTapi-clientes--cliente-" data-component="body"  hidden>
<br>
optional  Cidade.</p>
<p>
<b><code>uf</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="uf" data-endpoint="PUTapi-clientes--cliente-" data-component="body"  hidden>
<br>
optional  AM.</p>
<p>
<b><code>ddd</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="ddd" data-endpoint="PUTapi-clientes--cliente-" data-component="body"  hidden>
<br>
optional  DDD.</p>

</form>


## Deletar




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/clientes/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/clientes/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-clientes--cliente-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-clientes--cliente-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-clientes--cliente-"></code></pre>
</div>
<div id="execution-error-DELETEapi-clientes--cliente-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-clientes--cliente-"></code></pre>
</div>
<form id="form-DELETEapi-clientes--cliente-" data-method="DELETE" data-path="api/clientes/{cliente}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-clientes--cliente-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/clientes/{cliente}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>cliente</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cliente" data-endpoint="DELETEapi-clientes--cliente-" data-component="url" required  hidden>
<br>
</p>
</form>




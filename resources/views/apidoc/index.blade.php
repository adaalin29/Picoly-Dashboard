<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["php","python","bash","javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="php">php</a>
                                  <a href="#" data-language-name="python">python</a>
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>general</h1>
<!-- START_319b38521c30f1f2f8448f8215dccf49 -->
<h2>admin/language/texts/{lang?}/{file?}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/language/texts//',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/texts//'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/language/texts//" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/texts//"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/language/texts/{lang?}/{file?}</code></p>
<!-- END_319b38521c30f1f2f8448f8215dccf49 -->
<!-- START_052be3d6c8b452d247567c84286bfcfb -->
<h2>admin/language/texts/{lang}/{file}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/language/texts/1/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/texts/1/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/language/texts/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/texts/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/language/texts/{lang}/{file}</code></p>
<!-- END_052be3d6c8b452d247567c84286bfcfb -->
<!-- START_42c2f5078ac9f6a10d024186277cc44b -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/language/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/language/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/language/search</code></p>
<!-- END_42c2f5078ac9f6a10d024186277cc44b -->
<!-- START_a79d5ca10e680732523bb25924efff52 -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/language/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/language/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/language/bulk-delete</code></p>
<!-- END_a79d5ca10e680732523bb25924efff52 -->
<!-- START_fcb8a0ebaaeeb10e28a692325c5fe06a -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/language/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/language/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/language/reorder</code></p>
<!-- END_fcb8a0ebaaeeb10e28a692325c5fe06a -->
<!-- START_fe4b558cc97a6e61ea7c7534753c0c69 -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/language/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/language/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/language/reorder</code></p>
<!-- END_fe4b558cc97a6e61ea7c7534753c0c69 -->
<!-- START_4646ba9c20acb957a22675ab8f420629 -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/language/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/language/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/language/{id}/details</code></p>
<!-- END_4646ba9c20acb957a22675ab8f420629 -->
<!-- START_4ea661fa73a4ded528047baab76ed014 -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/language/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/language/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/language/{id}/revisions</code></p>
<!-- END_4ea661fa73a4ded528047baab76ed014 -->
<!-- START_9f6acac964226eae9ab1ce538b91e823 -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/language/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/language/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/language/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_9f6acac964226eae9ab1ce538b91e823 -->
<!-- START_7182b08c89c73c35c090192e053d1aa2 -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/language/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/language/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/language/{id}/clone</code></p>
<!-- END_7182b08c89c73c35c090192e053d1aa2 -->
<!-- START_0e20e2e1a154a0adc1f1518ab4542f66 -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/language/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/language/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/language/bulk-clone</code></p>
<!-- END_0e20e2e1a154a0adc1f1518ab4542f66 -->
<!-- START_2edbb91dbccda3694a305176958817b5 -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/language',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/language" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/language</code></p>
<!-- END_2edbb91dbccda3694a305176958817b5 -->
<!-- START_2a720f35e84d7f5cf8c2eb1531bf9015 -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/language/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/language/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/language/create</code></p>
<!-- END_2a720f35e84d7f5cf8c2eb1531bf9015 -->
<!-- START_79319f47676e92b3405b595e55aaaf8a -->
<h2>admin/language</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/language',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/language" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/language</code></p>
<!-- END_79319f47676e92b3405b595e55aaaf8a -->
<!-- START_add5604081cb7d6343407a02d49b165b -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/language/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/language/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/language/{language}</code></p>
<!-- END_add5604081cb7d6343407a02d49b165b -->
<!-- START_0c14c2786863048259d3bbcb879a90dc -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/language/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/language/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/language/{language}/edit</code></p>
<!-- END_0c14c2786863048259d3bbcb879a90dc -->
<!-- START_ae8fc2c26216d3036ffe2c70c3e6c03c -->
<h2>admin/language/{language}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/language/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/language/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/language/{language}</code></p>
<p><code>PATCH admin/language/{language}</code></p>
<!-- END_ae8fc2c26216d3036ffe2c70c3e6c03c -->
<!-- START_c083cdb5b1eda4e2bc240cc9a272ad6a -->
<h2>After delete remove also the language folder.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/language/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/language/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/language/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/language/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/language/{language}</code></p>
<!-- END_c083cdb5b1eda4e2bc240cc9a272ad6a -->
<!-- START_03a76d7b7a89853a08696bfe71bbbba7 -->
<h2>Show the application login form.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/login',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/login'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/login</code></p>
<!-- END_03a76d7b7a89853a08696bfe71bbbba7 -->
<!-- START_fe5fe3a14f04e5648848f1a59ea3da82 -->
<h2>Handle a login request to the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/login',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/login'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/login</code></p>
<!-- END_fe5fe3a14f04e5648848f1a59ea3da82 -->
<!-- START_b37225c1c4a9d4a9e253fecd543b79a0 -->
<h2>Log the user out and redirect him to specific location.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/logout',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/logout</code></p>
<!-- END_b37225c1c4a9d4a9e253fecd543b79a0 -->
<!-- START_d31bd86158f6a5a775c92ea5b5554af9 -->
<h2>Log the user out and redirect him to specific location.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/logout',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/logout</code></p>
<!-- END_d31bd86158f6a5a775c92ea5b5554af9 -->
<!-- START_2e5219bcb27fe97708e6f9907b7c9770 -->
<h2>Show the application registration form.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/register',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/register'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (403):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Înregistrarea este închisă."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/register</code></p>
<!-- END_2e5219bcb27fe97708e6f9907b7c9770 -->
<!-- START_1832f7098e04604e04a2186b694f4df8 -->
<h2>Handle a registration request for the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/register',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/register'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/register</code></p>
<!-- END_1832f7098e04604e04a2186b694f4df8 -->
<!-- START_583a6990174e55a2eb91791ae4776c83 -->
<h2>Display the form to request a password reset link.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/password/reset',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/password/reset'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/password/reset</code></p>
<!-- END_583a6990174e55a2eb91791ae4776c83 -->
<!-- START_d155055b87508acb9e934bcf9407b028 -->
<h2>Reset the given user&#039;s password.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/password/reset',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/password/reset'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/password/reset</code></p>
<!-- END_d155055b87508acb9e934bcf9407b028 -->
<!-- START_968312b0cceac43f210857c19898f766 -->
<h2>Display the password reset view for the given token.</h2>
<p>If no token is present, display the link request form.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/password/reset/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/password/reset/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/password/reset/{token}</code></p>
<!-- END_968312b0cceac43f210857c19898f766 -->
<!-- START_f611ae8378c7426b163ac3d140ded37c -->
<h2>Send a reset link to the given user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/password/email',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/password/email'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/password/email</code></p>
<!-- END_f611ae8378c7426b163ac3d140ded37c -->
<!-- START_8a59594ff635c00027a130968fc47527 -->
<h2>Show the admin dashboard.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/dashboard',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/dashboard'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/dashboard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/dashboard</code></p>
<!-- END_8a59594ff635c00027a130968fc47527 -->
<!-- START_e40bc60a458a9740730202aaec04f818 -->
<h2>Redirect to the dashboard.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin</code></p>
<!-- END_e40bc60a458a9740730202aaec04f818 -->
<!-- START_cfebc955e502ab82ac98b489aa8a44c8 -->
<h2>Show the user a form to change his personal information.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/edit-account-info',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/edit-account-info'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/edit-account-info" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/edit-account-info"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/edit-account-info</code></p>
<!-- END_cfebc955e502ab82ac98b489aa8a44c8 -->
<!-- START_7d0dd830a363243fbc7058cc72b9c488 -->
<h2>Save the modified personal information for a user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/edit-account-info',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/edit-account-info'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/edit-account-info" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/edit-account-info"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/edit-account-info</code></p>
<!-- END_7d0dd830a363243fbc7058cc72b9c488 -->
<!-- START_dfe38266bff5eee7b51f2c7432d69437 -->
<h2>Show the user a form to change his login password.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/change-password',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/change-password'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/change-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/change-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/change-password</code></p>
<!-- END_dfe38266bff5eee7b51f2c7432d69437 -->
<!-- START_8f5705e828d3ae370595f1bd0ce2af17 -->
<h2>Save the new password for a user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/change-password',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/change-password'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/change-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/change-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/change-password</code></p>
<!-- END_8f5705e828d3ae370595f1bd0ce2af17 -->
<!-- START_613f8c308c43a31eab4c145d6b1d0c35 -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/restaurant/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/restaurant/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/restaurant/search</code></p>
<!-- END_613f8c308c43a31eab4c145d6b1d0c35 -->
<!-- START_1368d15fb039d18f71450235d309d5a4 -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/restaurant/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/restaurant/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/restaurant/bulk-delete</code></p>
<!-- END_1368d15fb039d18f71450235d309d5a4 -->
<!-- START_5a4082a947d8a2411acd6a65aeeefd66 -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurant/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurant/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurant/reorder</code></p>
<!-- END_5a4082a947d8a2411acd6a65aeeefd66 -->
<!-- START_8b8d5441e56d42d5671389fff9bcfe07 -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/restaurant/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/restaurant/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/restaurant/reorder</code></p>
<!-- END_8b8d5441e56d42d5671389fff9bcfe07 -->
<!-- START_41a5f1083085e2e2b21cda28e49f60a9 -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurant/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurant/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurant/{id}/details</code></p>
<!-- END_41a5f1083085e2e2b21cda28e49f60a9 -->
<!-- START_f682a94ba2229394bdd44e6b5a21b285 -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurant/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurant/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurant/{id}/revisions</code></p>
<!-- END_f682a94ba2229394bdd44e6b5a21b285 -->
<!-- START_30062649e9c5058ef82872fdac21781f -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/restaurant/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/restaurant/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/restaurant/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_30062649e9c5058ef82872fdac21781f -->
<!-- START_9e23075b67ede3544fb3693103af1528 -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/restaurant/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/restaurant/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/restaurant/{id}/clone</code></p>
<!-- END_9e23075b67ede3544fb3693103af1528 -->
<!-- START_9abc1c9aa25d1cd409763318318c9040 -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/restaurant/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/restaurant/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/restaurant/bulk-clone</code></p>
<!-- END_9abc1c9aa25d1cd409763318318c9040 -->
<!-- START_477c462d03e76ccd7d4fbfa407fcdc3e -->
<h2>admin/restaurant/{id}/print</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurant/1/print',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/1/print'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurant/1/print" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/1/print"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurant/{id}/print</code></p>
<!-- END_477c462d03e76ccd7d4fbfa407fcdc3e -->
<!-- START_5ed7dca4680fcffaa9dd0a2e7d595d7c -->
<h2>admin/restaurant/{id}/createWaiter</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurant/1/createWaiter',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/1/createWaiter'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurant/1/createWaiter" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/1/createWaiter"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurant/{id}/createWaiter</code></p>
<!-- END_5ed7dca4680fcffaa9dd0a2e7d595d7c -->
<!-- START_68f68bc3198f3b1f1a95058a24ff64b8 -->
<h2>admin/restaurant/{id}/sendReviews</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurant/1/sendReviews',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/1/sendReviews'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurant/1/sendReviews" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/1/sendReviews"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurant/{id}/sendReviews</code></p>
<!-- END_68f68bc3198f3b1f1a95058a24ff64b8 -->
<!-- START_43c2c003b851cc8a14304f419e1c4783 -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurant',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurant" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurant</code></p>
<!-- END_43c2c003b851cc8a14304f419e1c4783 -->
<!-- START_eb7eedd6e1e9218f5384a8211f071203 -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurant/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurant/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurant/create</code></p>
<!-- END_eb7eedd6e1e9218f5384a8211f071203 -->
<!-- START_373794c9e0936be4a4903e69d149f2b7 -->
<h2>admin/restaurant</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/restaurant',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/restaurant" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/restaurant</code></p>
<!-- END_373794c9e0936be4a4903e69d149f2b7 -->
<!-- START_3408fc3425ea7d315d07f61f384d8321 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurant/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurant/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurant/{restaurant}</code></p>
<!-- END_3408fc3425ea7d315d07f61f384d8321 -->
<!-- START_f30b9a9ce5c767050dfb1b3f16afde13 -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurant/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurant/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurant/{restaurant}/edit</code></p>
<!-- END_f30b9a9ce5c767050dfb1b3f16afde13 -->
<!-- START_69c673ecf05d72003cdb9c32f4adaa1b -->
<h2>admin/restaurant/{restaurant}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/restaurant/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/restaurant/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/restaurant/{restaurant}</code></p>
<p><code>PATCH admin/restaurant/{restaurant}</code></p>
<!-- END_69c673ecf05d72003cdb9c32f4adaa1b -->
<!-- START_2a7d9f0bbef9b3a7a06d2e09a2a52008 -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/restaurant/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurant/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/restaurant/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurant/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/restaurant/{restaurant}</code></p>
<!-- END_2a7d9f0bbef9b3a7a06d2e09a2a52008 -->
<!-- START_78d3190f03c2530542167f245e577e2c -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/admins/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/admins/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/admins/search</code></p>
<!-- END_78d3190f03c2530542167f245e577e2c -->
<!-- START_efc4a7e840cc194b5f29a026433b1c35 -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/admins/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/admins/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/admins/bulk-delete</code></p>
<!-- END_efc4a7e840cc194b5f29a026433b1c35 -->
<!-- START_39f24cf22dad2fc384bca8fbe214b87e -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/admins/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/admins/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/admins/reorder</code></p>
<!-- END_39f24cf22dad2fc384bca8fbe214b87e -->
<!-- START_7f6ba3be63c1d61466af9812261c8c8a -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/admins/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/admins/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/admins/reorder</code></p>
<!-- END_7f6ba3be63c1d61466af9812261c8c8a -->
<!-- START_92615ebe6c16f091fba588c68a75b745 -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/admins/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/admins/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/admins/{id}/details</code></p>
<!-- END_92615ebe6c16f091fba588c68a75b745 -->
<!-- START_e6302604cf9e604b205452297e61cf15 -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/admins/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/admins/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/admins/{id}/revisions</code></p>
<!-- END_e6302604cf9e604b205452297e61cf15 -->
<!-- START_eaf81f4cd5e23c403fac7522fb33f73b -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/admins/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/admins/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/admins/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_eaf81f4cd5e23c403fac7522fb33f73b -->
<!-- START_5b8257407c3b52424fa8f4ce8f4787da -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/admins/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/admins/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/admins/{id}/clone</code></p>
<!-- END_5b8257407c3b52424fa8f4ce8f4787da -->
<!-- START_87bfce1c7d03afc7ba23707763826465 -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/admins/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/admins/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/admins/bulk-clone</code></p>
<!-- END_87bfce1c7d03afc7ba23707763826465 -->
<!-- START_011c0e7295b2efd66755236f001d178d -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/admins',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/admins" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/admins</code></p>
<!-- END_011c0e7295b2efd66755236f001d178d -->
<!-- START_d18ca189e946219054f5ce64c321efa1 -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/admins/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/admins/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/admins/create</code></p>
<!-- END_d18ca189e946219054f5ce64c321efa1 -->
<!-- START_dd65d572fbc58e3b2936537bdece7e80 -->
<h2>Store a newly created resource in the database.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/admins',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/admins" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/admins</code></p>
<!-- END_dd65d572fbc58e3b2936537bdece7e80 -->
<!-- START_d30364fce183e878fbb69777c1ac40b3 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/admins/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/admins/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/admins/{admin}</code></p>
<!-- END_d30364fce183e878fbb69777c1ac40b3 -->
<!-- START_e8b35946dba715c1aefe1fcc9915050c -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/admins/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/admins/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/admins/{admin}/edit</code></p>
<!-- END_e8b35946dba715c1aefe1fcc9915050c -->
<!-- START_05ccc55a3efdf489d6a35699bad8fd90 -->
<h2>admin/admins/{admin}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/admins/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/admins/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/admins/{admin}</code></p>
<p><code>PATCH admin/admins/{admin}</code></p>
<!-- END_05ccc55a3efdf489d6a35699bad8fd90 -->
<!-- START_20da9b34e850b79878874eb55d6b50cc -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/admins/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/admins/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/admins/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/admins/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/admins/{admin}</code></p>
<!-- END_20da9b34e850b79878874eb55d6b50cc -->
<!-- START_892bb80b4aed57067d0647285bbc5282 -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/waiter/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/waiter/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/waiter/search</code></p>
<!-- END_892bb80b4aed57067d0647285bbc5282 -->
<!-- START_26151b5eebdec8663c5ecbd43206c4d8 -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/waiter/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/waiter/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/waiter/bulk-delete</code></p>
<!-- END_26151b5eebdec8663c5ecbd43206c4d8 -->
<!-- START_113b302ac97209fecd80f9641b3f948a -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/waiter/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/waiter/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/waiter/reorder</code></p>
<!-- END_113b302ac97209fecd80f9641b3f948a -->
<!-- START_1fbc541f1a0d22252319b971fa09863b -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/waiter/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/waiter/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/waiter/reorder</code></p>
<!-- END_1fbc541f1a0d22252319b971fa09863b -->
<!-- START_12a4993e69aace9ff946d54ad8703643 -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/waiter/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/waiter/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/waiter/{id}/details</code></p>
<!-- END_12a4993e69aace9ff946d54ad8703643 -->
<!-- START_5a7e8c6a2094ca583195f445bbe32da6 -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/waiter/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/waiter/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/waiter/{id}/revisions</code></p>
<!-- END_5a7e8c6a2094ca583195f445bbe32da6 -->
<!-- START_18ddf40f054c7e9559213da8b5902fc8 -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/waiter/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/waiter/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/waiter/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_18ddf40f054c7e9559213da8b5902fc8 -->
<!-- START_63a980dac082f871ccc8f8ec602e7ef3 -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/waiter/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/waiter/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/waiter/{id}/clone</code></p>
<!-- END_63a980dac082f871ccc8f8ec602e7ef3 -->
<!-- START_b069551ba894a9af29e78914426188cf -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/waiter/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/waiter/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/waiter/bulk-clone</code></p>
<!-- END_b069551ba894a9af29e78914426188cf -->
<!-- START_62df457411228a255ad57587647edb71 -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/waiter',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/waiter" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/waiter</code></p>
<!-- END_62df457411228a255ad57587647edb71 -->
<!-- START_1f52fd2d4b85250bca164f078d8b59c2 -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/waiter/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/waiter/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/waiter/create</code></p>
<!-- END_1f52fd2d4b85250bca164f078d8b59c2 -->
<!-- START_eb557ead73b59e121ae62ba5aac2a7e8 -->
<h2>admin/waiter</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/waiter',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/waiter" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/waiter</code></p>
<!-- END_eb557ead73b59e121ae62ba5aac2a7e8 -->
<!-- START_d6f9f8c8305364f57530f6f03e29ea21 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/waiter/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/waiter/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/waiter/{waiter}</code></p>
<!-- END_d6f9f8c8305364f57530f6f03e29ea21 -->
<!-- START_6cb9ee97a8a3f05304b34663ab5cc164 -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/waiter/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/waiter/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/waiter/{waiter}/edit</code></p>
<!-- END_6cb9ee97a8a3f05304b34663ab5cc164 -->
<!-- START_aed00c3d21f22bf860dbbeedc20243b4 -->
<h2>admin/waiter/{waiter}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/waiter/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/waiter/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/waiter/{waiter}</code></p>
<p><code>PATCH admin/waiter/{waiter}</code></p>
<!-- END_aed00c3d21f22bf860dbbeedc20243b4 -->
<!-- START_6a09c26764280211069e36c101d6e041 -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/waiter/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/waiter/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/waiter/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/waiter/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/waiter/{waiter}</code></p>
<!-- END_6a09c26764280211069e36c101d6e041 -->
<!-- START_1be71146af3c46ee1a007d0199cb7051 -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/restaurantstable/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/restaurantstable/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/restaurantstable/search</code></p>
<!-- END_1be71146af3c46ee1a007d0199cb7051 -->
<!-- START_a79e35adcc749de0e131b2bb9a6d2ca8 -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/restaurantstable/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/restaurantstable/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/restaurantstable/bulk-delete</code></p>
<!-- END_a79e35adcc749de0e131b2bb9a6d2ca8 -->
<!-- START_4d099939c0db34730990a81b1c6a3120 -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurantstable/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurantstable/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurantstable/reorder</code></p>
<!-- END_4d099939c0db34730990a81b1c6a3120 -->
<!-- START_887465db5fe8c883373266b854076c12 -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/restaurantstable/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/restaurantstable/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/restaurantstable/reorder</code></p>
<!-- END_887465db5fe8c883373266b854076c12 -->
<!-- START_938de5c9287b4871973482f59510a06c -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurantstable/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurantstable/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurantstable/{id}/details</code></p>
<!-- END_938de5c9287b4871973482f59510a06c -->
<!-- START_a6af5c2480b80b4f525c24b228a49d6e -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurantstable/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurantstable/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurantstable/{id}/revisions</code></p>
<!-- END_a6af5c2480b80b4f525c24b228a49d6e -->
<!-- START_17a16e2793abcaf2b3534a93fe68a90e -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/restaurantstable/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/restaurantstable/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/restaurantstable/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_17a16e2793abcaf2b3534a93fe68a90e -->
<!-- START_f74d778ff1d77356c0dd991e723b2c7b -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/restaurantstable/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/restaurantstable/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/restaurantstable/{id}/clone</code></p>
<!-- END_f74d778ff1d77356c0dd991e723b2c7b -->
<!-- START_b1e340d13313ec4b1d24418811279903 -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/restaurantstable/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/restaurantstable/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/restaurantstable/bulk-clone</code></p>
<!-- END_b1e340d13313ec4b1d24418811279903 -->
<!-- START_ef9058e16c239454c4a5cfd941e2d2df -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurantstable',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurantstable" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurantstable</code></p>
<!-- END_ef9058e16c239454c4a5cfd941e2d2df -->
<!-- START_643a9aa990751f36c2245852a45e3922 -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurantstable/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurantstable/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurantstable/create</code></p>
<!-- END_643a9aa990751f36c2245852a45e3922 -->
<!-- START_fab37e2804cde3f440c59aa2513bfcb5 -->
<h2>admin/restaurantstable</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/restaurantstable',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/restaurantstable" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/restaurantstable</code></p>
<!-- END_fab37e2804cde3f440c59aa2513bfcb5 -->
<!-- START_97df377e5fd700b9aadea5d57a319612 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurantstable/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurantstable/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurantstable/{restaurantstable}</code></p>
<!-- END_97df377e5fd700b9aadea5d57a319612 -->
<!-- START_a766e2da63280717c451f6bb26ea50ea -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/restaurantstable/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/restaurantstable/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/restaurantstable/{restaurantstable}/edit</code></p>
<!-- END_a766e2da63280717c451f6bb26ea50ea -->
<!-- START_ec5d2f743009d691c49f3bc916312d70 -->
<h2>admin/restaurantstable/{restaurantstable}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/restaurantstable/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/restaurantstable/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/restaurantstable/{restaurantstable}</code></p>
<p><code>PATCH admin/restaurantstable/{restaurantstable}</code></p>
<!-- END_ec5d2f743009d691c49f3bc916312d70 -->
<!-- START_b0738e9bff4d4876083b9a0415cad3c7 -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/restaurantstable/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/restaurantstable/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/restaurantstable/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/restaurantstable/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/restaurantstable/{restaurantstable}</code></p>
<!-- END_b0738e9bff4d4876083b9a0415cad3c7 -->
<!-- START_b1676f08a2fdb1f5929616a702b2ec75 -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/review/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/review/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/review/search</code></p>
<!-- END_b1676f08a2fdb1f5929616a702b2ec75 -->
<!-- START_f3337f216d7c0f590312302be7afe1bd -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/review/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/review/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/review/bulk-delete</code></p>
<!-- END_f3337f216d7c0f590312302be7afe1bd -->
<!-- START_a671cc8aa8aebc50c631f12cc9a81cfa -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/review/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/review/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/review/reorder</code></p>
<!-- END_a671cc8aa8aebc50c631f12cc9a81cfa -->
<!-- START_c4745c3bf9c605d1b57ae4821028e9ce -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/review/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/review/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/review/reorder</code></p>
<!-- END_c4745c3bf9c605d1b57ae4821028e9ce -->
<!-- START_c8e1cce39147fc1570de82a18da5be90 -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/review/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/review/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/review/{id}/details</code></p>
<!-- END_c8e1cce39147fc1570de82a18da5be90 -->
<!-- START_d78c9cb686ae0f32b7c66fe869964352 -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/review/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/review/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/review/{id}/revisions</code></p>
<!-- END_d78c9cb686ae0f32b7c66fe869964352 -->
<!-- START_6845e7824ff5bcb72b8741b258e1be0a -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/review/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/review/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/review/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_6845e7824ff5bcb72b8741b258e1be0a -->
<!-- START_2e6dda21c7799d1f1922e49f3d760fc6 -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/review/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/review/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/review/{id}/clone</code></p>
<!-- END_2e6dda21c7799d1f1922e49f3d760fc6 -->
<!-- START_bb305f492324cf1e58143b79ec782ba5 -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/review/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/review/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/review/bulk-clone</code></p>
<!-- END_bb305f492324cf1e58143b79ec782ba5 -->
<!-- START_e37922659bc8dd349d2d25a188a20d23 -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/review',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/review" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/review</code></p>
<!-- END_e37922659bc8dd349d2d25a188a20d23 -->
<!-- START_d76d8b44f1a51aea5c325c59f1fe8822 -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/review/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/review/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/review/create</code></p>
<!-- END_d76d8b44f1a51aea5c325c59f1fe8822 -->
<!-- START_1650d22fdf32e9a4041618f5c07356a0 -->
<h2>admin/review</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/review',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/review" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/review</code></p>
<!-- END_1650d22fdf32e9a4041618f5c07356a0 -->
<!-- START_af3740b2337bbad8df6dc1461649f097 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/review/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/review/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/review/{review}</code></p>
<!-- END_af3740b2337bbad8df6dc1461649f097 -->
<!-- START_1a301dc8fb846999b17f67f52ca6c23e -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/review/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/review/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/review/{review}/edit</code></p>
<!-- END_1a301dc8fb846999b17f67f52ca6c23e -->
<!-- START_4dcd161a4231f7bc4efb517e50a0e647 -->
<h2>admin/review/{review}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/review/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/review/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/review/{review}</code></p>
<p><code>PATCH admin/review/{review}</code></p>
<!-- END_4dcd161a4231f7bc4efb517e50a0e647 -->
<!-- START_5913fcb2cf7f58a985c3653cfbf4f682 -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/review/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/review/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/review/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/review/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/review/{review}</code></p>
<!-- END_5913fcb2cf7f58a985c3653cfbf4f682 -->
<!-- START_2ba699d59e8921b513a46441bbf0dc7b -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/deal/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/deal/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/deal/search</code></p>
<!-- END_2ba699d59e8921b513a46441bbf0dc7b -->
<!-- START_0c0a8f6c2149b4b007269d7809ed9ca5 -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/deal/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/deal/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/deal/bulk-delete</code></p>
<!-- END_0c0a8f6c2149b4b007269d7809ed9ca5 -->
<!-- START_0cd68092d823ecf4cde5ba427a868a19 -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/deal/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/deal/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/deal/reorder</code></p>
<!-- END_0cd68092d823ecf4cde5ba427a868a19 -->
<!-- START_e6e50efcaed95a40d8116151c99f2b42 -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/deal/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/deal/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/deal/reorder</code></p>
<!-- END_e6e50efcaed95a40d8116151c99f2b42 -->
<!-- START_c5a5013f59d7cea1f7d99379be41f560 -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/deal/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/deal/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/deal/{id}/details</code></p>
<!-- END_c5a5013f59d7cea1f7d99379be41f560 -->
<!-- START_4e5231a19d2ebbaca3e5e7ebe4900f68 -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/deal/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/deal/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/deal/{id}/revisions</code></p>
<!-- END_4e5231a19d2ebbaca3e5e7ebe4900f68 -->
<!-- START_9a70ac7457d083f32b754044b8614333 -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/deal/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/deal/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/deal/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_9a70ac7457d083f32b754044b8614333 -->
<!-- START_9efdf3f7830b2a4c103c874c4dca5dd7 -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/deal/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/deal/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/deal/{id}/clone</code></p>
<!-- END_9efdf3f7830b2a4c103c874c4dca5dd7 -->
<!-- START_42fdca15417d7bf90a9b1ce98952261e -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/deal/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/deal/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/deal/bulk-clone</code></p>
<!-- END_42fdca15417d7bf90a9b1ce98952261e -->
<!-- START_383cfd5afdc80bfc9b9e7e2487920820 -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/deal',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/deal" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/deal</code></p>
<!-- END_383cfd5afdc80bfc9b9e7e2487920820 -->
<!-- START_052b787cee5f4e7afd710f07752a6411 -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/deal/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/deal/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/deal/create</code></p>
<!-- END_052b787cee5f4e7afd710f07752a6411 -->
<!-- START_451fbaa53495ae2a1130cace5be24a82 -->
<h2>admin/deal</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/deal',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/deal" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/deal</code></p>
<!-- END_451fbaa53495ae2a1130cace5be24a82 -->
<!-- START_16ef2407c93a5f3b5d2b259cbdc83408 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/deal/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/deal/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/deal/{deal}</code></p>
<!-- END_16ef2407c93a5f3b5d2b259cbdc83408 -->
<!-- START_5374c792181c4378e67f6fbb1c1acddf -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/deal/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/deal/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/deal/{deal}/edit</code></p>
<!-- END_5374c792181c4378e67f6fbb1c1acddf -->
<!-- START_d8880d5950fd7b64dac885e90bfcce94 -->
<h2>admin/deal/{deal}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/deal/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/deal/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/deal/{deal}</code></p>
<p><code>PATCH admin/deal/{deal}</code></p>
<!-- END_d8880d5950fd7b64dac885e90bfcce94 -->
<!-- START_c8d51a4e16102e038f2c716061bc3929 -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/deal/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/deal/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/deal/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/deal/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/deal/{deal}</code></p>
<!-- END_c8d51a4e16102e038f2c716061bc3929 -->
<!-- START_1603c5a3a0f83d904e796eec3d6c6b40 -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/table_locations/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/table_locations/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/table_locations/search</code></p>
<!-- END_1603c5a3a0f83d904e796eec3d6c6b40 -->
<!-- START_0e9882496cdc7df17cad72255f341d0d -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/table_locations/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/table_locations/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/table_locations/bulk-delete</code></p>
<!-- END_0e9882496cdc7df17cad72255f341d0d -->
<!-- START_05cceac5e6cdb9bc37e744f7eb6bb6de -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_locations/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_locations/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_locations/reorder</code></p>
<!-- END_05cceac5e6cdb9bc37e744f7eb6bb6de -->
<!-- START_ce8d2824b29df096e7f85383ada5b32e -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/table_locations/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/table_locations/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/table_locations/reorder</code></p>
<!-- END_ce8d2824b29df096e7f85383ada5b32e -->
<!-- START_8fa76ee9712c89e8014e9f9fded986bc -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_locations/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_locations/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_locations/{id}/details</code></p>
<!-- END_8fa76ee9712c89e8014e9f9fded986bc -->
<!-- START_f6ed3554278ff2a26801b69635682bb1 -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_locations/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_locations/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_locations/{id}/revisions</code></p>
<!-- END_f6ed3554278ff2a26801b69635682bb1 -->
<!-- START_331308acfe719740ca6b65248d549fef -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/table_locations/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/table_locations/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/table_locations/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_331308acfe719740ca6b65248d549fef -->
<!-- START_0f59e7de772d593114881aa7ec84ab8f -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/table_locations/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/table_locations/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/table_locations/{id}/clone</code></p>
<!-- END_0f59e7de772d593114881aa7ec84ab8f -->
<!-- START_603891ad7a5c969a3ace693f15b0e5d0 -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/table_locations/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/table_locations/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/table_locations/bulk-clone</code></p>
<!-- END_603891ad7a5c969a3ace693f15b0e5d0 -->
<!-- START_eeb33c614b5ecec31df835b018efc595 -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_locations',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_locations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_locations</code></p>
<!-- END_eeb33c614b5ecec31df835b018efc595 -->
<!-- START_7d29fb861dd8c24603041282e7b47e9e -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_locations/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_locations/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_locations/create</code></p>
<!-- END_7d29fb861dd8c24603041282e7b47e9e -->
<!-- START_c11081d2be19f84add56479d94948777 -->
<h2>admin/table_locations</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/table_locations',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/table_locations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/table_locations</code></p>
<!-- END_c11081d2be19f84add56479d94948777 -->
<!-- START_120ec14d9e64442b36e355e1dd44165d -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_locations/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_locations/{table_location}</code></p>
<!-- END_120ec14d9e64442b36e355e1dd44165d -->
<!-- START_fa65d4745b32191e11714f58e535b0d6 -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_locations/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_locations/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_locations/{table_location}/edit</code></p>
<!-- END_fa65d4745b32191e11714f58e535b0d6 -->
<!-- START_97680b5cd695c5cf15be2cda2020101d -->
<h2>admin/table_locations/{table_location}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/table_locations/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/table_locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/table_locations/{table_location}</code></p>
<p><code>PATCH admin/table_locations/{table_location}</code></p>
<!-- END_97680b5cd695c5cf15be2cda2020101d -->
<!-- START_1a9249fa1f6bd83c448a444a84deb259 -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/table_locations/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_locations/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/table_locations/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_locations/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/table_locations/{table_location}</code></p>
<!-- END_1a9249fa1f6bd83c448a444a84deb259 -->
<!-- START_7be2e95eeb11e36138380b7deff5df6c -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/table_names/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/table_names/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/table_names/search</code></p>
<!-- END_7be2e95eeb11e36138380b7deff5df6c -->
<!-- START_9aba2d4e1bfb1674fb949b1a6c0d5f7a -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/table_names/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/table_names/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/table_names/bulk-delete</code></p>
<!-- END_9aba2d4e1bfb1674fb949b1a6c0d5f7a -->
<!-- START_424bee835fe6ae24fb62c453bcbe71a1 -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_names/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_names/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_names/reorder</code></p>
<!-- END_424bee835fe6ae24fb62c453bcbe71a1 -->
<!-- START_dfc5e531018d77918e4e2845dd327357 -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/table_names/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/table_names/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/table_names/reorder</code></p>
<!-- END_dfc5e531018d77918e4e2845dd327357 -->
<!-- START_583d790f16ffd415ba4443e2e4915667 -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_names/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_names/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_names/{id}/details</code></p>
<!-- END_583d790f16ffd415ba4443e2e4915667 -->
<!-- START_7844374e64ed0932cbb07130924867dd -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_names/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_names/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_names/{id}/revisions</code></p>
<!-- END_7844374e64ed0932cbb07130924867dd -->
<!-- START_189dbb26c26f7b84865235c43045e035 -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/table_names/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/table_names/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/table_names/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_189dbb26c26f7b84865235c43045e035 -->
<!-- START_1afa02b52aaf098c01a7ead7cfc2612b -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/table_names/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/table_names/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/table_names/{id}/clone</code></p>
<!-- END_1afa02b52aaf098c01a7ead7cfc2612b -->
<!-- START_6864c8aaa2f59d97e961c8266ccbb3ba -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/table_names/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/table_names/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/table_names/bulk-clone</code></p>
<!-- END_6864c8aaa2f59d97e961c8266ccbb3ba -->
<!-- START_0154463c7819ccf8425ef2d0c2ffa44e -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_names',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_names" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_names</code></p>
<!-- END_0154463c7819ccf8425ef2d0c2ffa44e -->
<!-- START_d5b7b943d3484910f7c597379b2d3c2a -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_names/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_names/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_names/create</code></p>
<!-- END_d5b7b943d3484910f7c597379b2d3c2a -->
<!-- START_000414eeda261b7f69e91c25b51df42d -->
<h2>admin/table_names</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/table_names',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/table_names" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/table_names</code></p>
<!-- END_000414eeda261b7f69e91c25b51df42d -->
<!-- START_2b4dace08ada3036764c94b8c8aed785 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_names/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_names/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_names/{table_name}</code></p>
<!-- END_2b4dace08ada3036764c94b8c8aed785 -->
<!-- START_b8c0cb49eb42f2b0123af5ce3fa4a71a -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/table_names/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/table_names/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/table_names/{table_name}/edit</code></p>
<!-- END_b8c0cb49eb42f2b0123af5ce3fa4a71a -->
<!-- START_bb3e21929de47262c36efe16bbfe3d7c -->
<h2>admin/table_names/{table_name}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/table_names/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/table_names/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/table_names/{table_name}</code></p>
<p><code>PATCH admin/table_names/{table_name}</code></p>
<!-- END_bb3e21929de47262c36efe16bbfe3d7c -->
<!-- START_240ef48a0bef86575c66bec232d2c8ed -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/table_names/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/table_names/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/table_names/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/table_names/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/table_names/{table_name}</code></p>
<!-- END_240ef48a0bef86575c66bec232d2c8ed -->
<!-- START_ef652cde8591dc65377fad7a2ec852b5 -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/digital_categories/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/digital_categories/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/digital_categories/search</code></p>
<!-- END_ef652cde8591dc65377fad7a2ec852b5 -->
<!-- START_751553cfd3c84ca9fc50c0c2acfc3d97 -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/digital_categories/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/digital_categories/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/digital_categories/bulk-delete</code></p>
<!-- END_751553cfd3c84ca9fc50c0c2acfc3d97 -->
<!-- START_65baf60f22857001fb040e23edf222f3 -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/digital_categories/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/digital_categories/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/digital_categories/reorder</code></p>
<!-- END_65baf60f22857001fb040e23edf222f3 -->
<!-- START_66742ca4b92feb759b85f8eb08ab4da3 -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/digital_categories/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/digital_categories/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/digital_categories/reorder</code></p>
<!-- END_66742ca4b92feb759b85f8eb08ab4da3 -->
<!-- START_4fac67e28693b8687574b3e8f6322cd7 -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/digital_categories/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/digital_categories/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/digital_categories/{id}/details</code></p>
<!-- END_4fac67e28693b8687574b3e8f6322cd7 -->
<!-- START_37f82f412f1922dc79fe7499e1dbf413 -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/digital_categories/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/digital_categories/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/digital_categories/{id}/revisions</code></p>
<!-- END_37f82f412f1922dc79fe7499e1dbf413 -->
<!-- START_4b5eea6d69e4ebb82bfbcd49c4125942 -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/digital_categories/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/digital_categories/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/digital_categories/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_4b5eea6d69e4ebb82bfbcd49c4125942 -->
<!-- START_6f6d3a2682d7f7a242a0ae523cd415c1 -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/digital_categories/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/digital_categories/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/digital_categories/{id}/clone</code></p>
<!-- END_6f6d3a2682d7f7a242a0ae523cd415c1 -->
<!-- START_4ebec48bb7a57c3e4c8ab0c98998ba22 -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/digital_categories/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/digital_categories/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/digital_categories/bulk-clone</code></p>
<!-- END_4ebec48bb7a57c3e4c8ab0c98998ba22 -->
<!-- START_2d38ea2086e91ce3a18b0549a2bdca51 -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/digital_categories',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/digital_categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/digital_categories</code></p>
<!-- END_2d38ea2086e91ce3a18b0549a2bdca51 -->
<!-- START_c16547fc3f665caef2567526e91f1de8 -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/digital_categories/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/digital_categories/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/digital_categories/create</code></p>
<!-- END_c16547fc3f665caef2567526e91f1de8 -->
<!-- START_e12924e1afc86634fd6f389f50a06dc7 -->
<h2>admin/digital_categories</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/digital_categories',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/digital_categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/digital_categories</code></p>
<!-- END_e12924e1afc86634fd6f389f50a06dc7 -->
<!-- START_b61413b3c0499b20cd1f631356b12ab5 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/digital_categories/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/digital_categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/digital_categories/{digital_category}</code></p>
<!-- END_b61413b3c0499b20cd1f631356b12ab5 -->
<!-- START_8c3d607d6c3d25bba7049f85c5d4f044 -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/digital_categories/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/digital_categories/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/digital_categories/{digital_category}/edit</code></p>
<!-- END_8c3d607d6c3d25bba7049f85c5d4f044 -->
<!-- START_e887a31523a78d366c8e0dcd2e3dc0ea -->
<h2>admin/digital_categories/{digital_category}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/digital_categories/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/digital_categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/digital_categories/{digital_category}</code></p>
<p><code>PATCH admin/digital_categories/{digital_category}</code></p>
<!-- END_e887a31523a78d366c8e0dcd2e3dc0ea -->
<!-- START_b890417424041f4df5171b249e0069aa -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/digital_categories/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/digital_categories/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/digital_categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/digital_categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/digital_categories/{digital_category}</code></p>
<!-- END_b890417424041f4df5171b249e0069aa -->
<!-- START_7040cadcfce61d6b1049d71436e0dbf1 -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/menu_products/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/menu_products/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/menu_products/search</code></p>
<!-- END_7040cadcfce61d6b1049d71436e0dbf1 -->
<!-- START_8763468761992f08b29916f40b943032 -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/menu_products/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/menu_products/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/menu_products/bulk-delete</code></p>
<!-- END_8763468761992f08b29916f40b943032 -->
<!-- START_eb5af2ca5ec5ad3525e1e7cae14a9eee -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menu_products/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menu_products/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menu_products/reorder</code></p>
<!-- END_eb5af2ca5ec5ad3525e1e7cae14a9eee -->
<!-- START_8e8fc4b8ad0d6e054e5eb83dba86944d -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/menu_products/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/menu_products/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/menu_products/reorder</code></p>
<!-- END_8e8fc4b8ad0d6e054e5eb83dba86944d -->
<!-- START_db3c26a465f9e9bdc80b34421487adf6 -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menu_products/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menu_products/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menu_products/{id}/details</code></p>
<!-- END_db3c26a465f9e9bdc80b34421487adf6 -->
<!-- START_8f99c5964bbb7a17d9b39c5f4a7c2241 -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menu_products/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menu_products/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menu_products/{id}/revisions</code></p>
<!-- END_8f99c5964bbb7a17d9b39c5f4a7c2241 -->
<!-- START_b61347581545e2b2edc185bdefbf12e5 -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/menu_products/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/menu_products/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/menu_products/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_b61347581545e2b2edc185bdefbf12e5 -->
<!-- START_736e2a1c6bc609c34baf6f7d15e5c6ea -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/menu_products/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/menu_products/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/menu_products/{id}/clone</code></p>
<!-- END_736e2a1c6bc609c34baf6f7d15e5c6ea -->
<!-- START_ca57123c424405cbb816fb97ab3fd007 -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/menu_products/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/menu_products/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/menu_products/bulk-clone</code></p>
<!-- END_ca57123c424405cbb816fb97ab3fd007 -->
<!-- START_ff2d15e510da3a2c056cc09015d05f78 -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menu_products',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menu_products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menu_products</code></p>
<!-- END_ff2d15e510da3a2c056cc09015d05f78 -->
<!-- START_2be0dc79e9ae672ba02945ac91eb9d61 -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menu_products/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menu_products/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menu_products/create</code></p>
<!-- END_2be0dc79e9ae672ba02945ac91eb9d61 -->
<!-- START_ddd25942aef7ac9592b862f6222dfc11 -->
<h2>admin/menu_products</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/menu_products',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/menu_products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/menu_products</code></p>
<!-- END_ddd25942aef7ac9592b862f6222dfc11 -->
<!-- START_7255df7f1725133bd2057ea936aabf04 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menu_products/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menu_products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menu_products/{menu_product}</code></p>
<!-- END_7255df7f1725133bd2057ea936aabf04 -->
<!-- START_e9042b04c7d8ac98770a29bc3849713f -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menu_products/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menu_products/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menu_products/{menu_product}/edit</code></p>
<!-- END_e9042b04c7d8ac98770a29bc3849713f -->
<!-- START_65db120adbfdde37341f7767bcc3ba72 -->
<h2>admin/menu_products/{menu_product}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/menu_products/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/menu_products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/menu_products/{menu_product}</code></p>
<p><code>PATCH admin/menu_products/{menu_product}</code></p>
<!-- END_65db120adbfdde37341f7767bcc3ba72 -->
<!-- START_5fe55fc248b24a2f5030ec48221412cd -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/menu_products/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menu_products/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/menu_products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menu_products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/menu_products/{menu_product}</code></p>
<!-- END_5fe55fc248b24a2f5030ec48221412cd -->
<!-- START_8feba861c7ffc2d7f729a75e1b98efe7 -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/menus/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/menus/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/menus/search</code></p>
<!-- END_8feba861c7ffc2d7f729a75e1b98efe7 -->
<!-- START_956f5d1487026b50f8434cecc3a9fbfd -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/menus/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/menus/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/menus/bulk-delete</code></p>
<!-- END_956f5d1487026b50f8434cecc3a9fbfd -->
<!-- START_91f3b74574bcb4bcaba08e0d52532fe0 -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menus/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menus/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menus/reorder</code></p>
<!-- END_91f3b74574bcb4bcaba08e0d52532fe0 -->
<!-- START_99aed3eb0cab18b6eecdf9ccd2d94000 -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/menus/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/menus/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/menus/reorder</code></p>
<!-- END_99aed3eb0cab18b6eecdf9ccd2d94000 -->
<!-- START_8d992330761472e02822ed3b7d2969d2 -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menus/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menus/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menus/{id}/details</code></p>
<!-- END_8d992330761472e02822ed3b7d2969d2 -->
<!-- START_188b9bf99e63831b4685b9223ef284ee -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menus/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menus/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menus/{id}/revisions</code></p>
<!-- END_188b9bf99e63831b4685b9223ef284ee -->
<!-- START_95c3dfeb2ed755b33b7d197976aacd8d -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/menus/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/menus/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/menus/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_95c3dfeb2ed755b33b7d197976aacd8d -->
<!-- START_e78a597a5eb273e2fdce4a7ea7d5a843 -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/menus/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/menus/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/menus/{id}/clone</code></p>
<!-- END_e78a597a5eb273e2fdce4a7ea7d5a843 -->
<!-- START_591d0134bddec1206bac5835d80ade6d -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/menus/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/menus/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/menus/bulk-clone</code></p>
<!-- END_591d0134bddec1206bac5835d80ade6d -->
<!-- START_7a00d6c45032c03f4ae7d3beec00bb0e -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menus',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menus</code></p>
<!-- END_7a00d6c45032c03f4ae7d3beec00bb0e -->
<!-- START_e1fe606f36d5e0b828b7aa722d401ef1 -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menus/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menus/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menus/create</code></p>
<!-- END_e1fe606f36d5e0b828b7aa722d401ef1 -->
<!-- START_3ed1f4443877ce5c80a9f8ffdaa4e19c -->
<h2>admin/menus</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/menus',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/menus</code></p>
<!-- END_3ed1f4443877ce5c80a9f8ffdaa4e19c -->
<!-- START_00170fd0636c9c905a3a765cd98a787e -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menus/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menus/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menus/{menu}</code></p>
<!-- END_00170fd0636c9c905a3a765cd98a787e -->
<!-- START_6d83290f45dc6c023c2b03628b6cb2e8 -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/menus/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/menus/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/menus/{menu}/edit</code></p>
<!-- END_6d83290f45dc6c023c2b03628b6cb2e8 -->
<!-- START_3cf779916ca1bbca41a784a2688af997 -->
<h2>admin/menus/{menu}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/menus/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/menus/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/menus/{menu}</code></p>
<p><code>PATCH admin/menus/{menu}</code></p>
<!-- END_3cf779916ca1bbca41a784a2688af997 -->
<!-- START_72656acab42ef479668c40a1237c454c -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/menus/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/menus/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/menus/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/menus/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/menus/{menu}</code></p>
<!-- END_72656acab42ef479668c40a1237c454c -->
<!-- START_c66f2120689b3de43cda3633737f3a86 -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/permission/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/permission/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/permission/search</code></p>
<!-- END_c66f2120689b3de43cda3633737f3a86 -->
<!-- START_8b8d0f81dab212d9f465f7f95c6c3525 -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/permission/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/permission/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/permission/bulk-delete</code></p>
<!-- END_8b8d0f81dab212d9f465f7f95c6c3525 -->
<!-- START_e1b6528a12d3b4e18afa324a722aec93 -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/permission/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/permission/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/permission/reorder</code></p>
<!-- END_e1b6528a12d3b4e18afa324a722aec93 -->
<!-- START_d66758d8e7a2e70ddcadeb07c3485c69 -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/permission/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/permission/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/permission/reorder</code></p>
<!-- END_d66758d8e7a2e70ddcadeb07c3485c69 -->
<!-- START_ec4c90c80826297c522a1902b82bea35 -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/permission/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/permission/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/permission/{id}/details</code></p>
<!-- END_ec4c90c80826297c522a1902b82bea35 -->
<!-- START_9af846261a9f8f6e65b2e6e017fa934e -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/permission/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/permission/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/permission/{id}/revisions</code></p>
<!-- END_9af846261a9f8f6e65b2e6e017fa934e -->
<!-- START_1af33af8934e136cae6615199b1d2571 -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/permission/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/permission/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/permission/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_1af33af8934e136cae6615199b1d2571 -->
<!-- START_815d6e6d018004430bf7940c845830f8 -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/permission/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/permission/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/permission/{id}/clone</code></p>
<!-- END_815d6e6d018004430bf7940c845830f8 -->
<!-- START_0622486854273de6801ae5cd2a767a2c -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/permission/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/permission/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/permission/bulk-clone</code></p>
<!-- END_0622486854273de6801ae5cd2a767a2c -->
<!-- START_83279d6155c1499f6c34a50595cae12c -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/permission',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/permission" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/permission</code></p>
<!-- END_83279d6155c1499f6c34a50595cae12c -->
<!-- START_ceb7a75690d365dd64967ceaf36dae81 -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/permission/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/permission/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/permission/create</code></p>
<!-- END_ceb7a75690d365dd64967ceaf36dae81 -->
<!-- START_deeb2b5a20a84b3aba5132baaf0b9d1f -->
<h2>admin/permission</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/permission',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/permission" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/permission</code></p>
<!-- END_deeb2b5a20a84b3aba5132baaf0b9d1f -->
<!-- START_11101f22e3cefe1b2df0ba6e676d4d40 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/permission/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/permission/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/permission/{permission}</code></p>
<!-- END_11101f22e3cefe1b2df0ba6e676d4d40 -->
<!-- START_9e9ecbeef32a6f6dfb84cc17d6f01300 -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/permission/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/permission/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/permission/{permission}/edit</code></p>
<!-- END_9e9ecbeef32a6f6dfb84cc17d6f01300 -->
<!-- START_9dc2feebeb72ff08beaba6c6323f7fba -->
<h2>admin/permission/{permission}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/permission/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/permission/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/permission/{permission}</code></p>
<p><code>PATCH admin/permission/{permission}</code></p>
<!-- END_9dc2feebeb72ff08beaba6c6323f7fba -->
<!-- START_a00b2a629713d7b654e2f5aa0659ada4 -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/permission/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/permission/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/permission/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/permission/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/permission/{permission}</code></p>
<!-- END_a00b2a629713d7b654e2f5aa0659ada4 -->
<!-- START_c7d5f6ced842aa7aa35d91cfefd94429 -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/role/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/role/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/role/search</code></p>
<!-- END_c7d5f6ced842aa7aa35d91cfefd94429 -->
<!-- START_9d6dd891d6762ec0e7b5a97dcebe5c83 -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/role/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/role/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/role/bulk-delete</code></p>
<!-- END_9d6dd891d6762ec0e7b5a97dcebe5c83 -->
<!-- START_248f285b1319d3a51d5904f57c36b486 -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/role/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/role/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/role/reorder</code></p>
<!-- END_248f285b1319d3a51d5904f57c36b486 -->
<!-- START_a0021e2966309462e33251ca13bdab3b -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/role/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/role/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/role/reorder</code></p>
<!-- END_a0021e2966309462e33251ca13bdab3b -->
<!-- START_5ec09d76ab23017c2027be3ebe8af746 -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/role/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/role/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/role/{id}/details</code></p>
<!-- END_5ec09d76ab23017c2027be3ebe8af746 -->
<!-- START_df93eb6b1bdd4854842ef349a59d304d -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/role/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/role/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/role/{id}/revisions</code></p>
<!-- END_df93eb6b1bdd4854842ef349a59d304d -->
<!-- START_95f84e22dc9708a6a683591da5f9883f -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/role/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/role/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/role/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_95f84e22dc9708a6a683591da5f9883f -->
<!-- START_8ffc5324b70091322444b47afd909ca4 -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/role/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/role/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/role/{id}/clone</code></p>
<!-- END_8ffc5324b70091322444b47afd909ca4 -->
<!-- START_afe2987d50c165c738926c1ba24e95a5 -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/role/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/role/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/role/bulk-clone</code></p>
<!-- END_afe2987d50c165c738926c1ba24e95a5 -->
<!-- START_82f68f2b49601191068d2a3e52f6bc8b -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/role',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/role</code></p>
<!-- END_82f68f2b49601191068d2a3e52f6bc8b -->
<!-- START_13259a0edd4278fbb67d6176d6efeea9 -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/role/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/role/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/role/create</code></p>
<!-- END_13259a0edd4278fbb67d6176d6efeea9 -->
<!-- START_64c5083082f51f02e9c59f23549e1341 -->
<h2>admin/role</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/role',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/role</code></p>
<!-- END_64c5083082f51f02e9c59f23549e1341 -->
<!-- START_d05bc13bf03325fe0912623be4c78b25 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/role/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/role/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/role/{role}</code></p>
<!-- END_d05bc13bf03325fe0912623be4c78b25 -->
<!-- START_31bad7bd8379b0fff4dc61933b3899bf -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/role/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/role/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/role/{role}/edit</code></p>
<!-- END_31bad7bd8379b0fff4dc61933b3899bf -->
<!-- START_06c4eb4f0da941a29b2da741c4339aad -->
<h2>admin/role/{role}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/role/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/role/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/role/{role}</code></p>
<p><code>PATCH admin/role/{role}</code></p>
<!-- END_06c4eb4f0da941a29b2da741c4339aad -->
<!-- START_4acd49ff83e61527371e78c2982b2667 -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/role/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/role/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/role/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/role/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/role/{role}</code></p>
<!-- END_4acd49ff83e61527371e78c2982b2667 -->
<!-- START_832c2a50bfa486965c0930a5396f2c62 -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/user/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/user/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/user/search</code></p>
<!-- END_832c2a50bfa486965c0930a5396f2c62 -->
<!-- START_65c925a89139064486ef82e5d9843673 -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/user/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/user/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/user/bulk-delete</code></p>
<!-- END_65c925a89139064486ef82e5d9843673 -->
<!-- START_d429a2b991e8170e430c1b6c879ef66d -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/user/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/user/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/user/reorder</code></p>
<!-- END_d429a2b991e8170e430c1b6c879ef66d -->
<!-- START_1dc4d5f96fc070d9aae4c1c9594ca0b2 -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/user/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/user/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/user/reorder</code></p>
<!-- END_1dc4d5f96fc070d9aae4c1c9594ca0b2 -->
<!-- START_c89cd224c5856510593f87d79ad53d8a -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/user/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/user/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/user/{id}/details</code></p>
<!-- END_c89cd224c5856510593f87d79ad53d8a -->
<!-- START_247237d1a186bf1a393ce356e8ae18ff -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/user/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/user/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/user/{id}/revisions</code></p>
<!-- END_247237d1a186bf1a393ce356e8ae18ff -->
<!-- START_7ab797689a3260b093ef53cea1562e16 -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/user/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/user/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/user/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_7ab797689a3260b093ef53cea1562e16 -->
<!-- START_4bb56ab86f9231e893e7d464d61b4181 -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/user/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/user/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/user/{id}/clone</code></p>
<!-- END_4bb56ab86f9231e893e7d464d61b4181 -->
<!-- START_da80f088ad93eaeb28f5311cc0aec854 -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/user/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/user/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/user/bulk-clone</code></p>
<!-- END_da80f088ad93eaeb28f5311cc0aec854 -->
<!-- START_bd487ab94d8034c2d13644bb1772fdfa -->
<h2>Display all rows in the database for this entity.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/user',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/user</code></p>
<!-- END_bd487ab94d8034c2d13644bb1772fdfa -->
<!-- START_85482a73dd59bd3ef1adaab154cc5407 -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/user/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/user/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/user/create</code></p>
<!-- END_85482a73dd59bd3ef1adaab154cc5407 -->
<!-- START_71dba47ec1215d1147a3f8e59c55751a -->
<h2>Store a newly created resource in the database.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/user',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/user</code></p>
<!-- END_71dba47ec1215d1147a3f8e59c55751a -->
<!-- START_3b3de25d21f37e1748b345027c37ce73 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/user/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/user/{user}</code></p>
<!-- END_3b3de25d21f37e1748b345027c37ce73 -->
<!-- START_8dbd3c8dace74c8cc20dbdadc3a61eed -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/user/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/user/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/user/{user}/edit</code></p>
<!-- END_8dbd3c8dace74c8cc20dbdadc3a61eed -->
<!-- START_7bc8a51548d7c6e9ac5bc7dda1263ba7 -->
<h2>Update the specified resource in the database.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/user/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/user/{user}</code></p>
<p><code>PATCH admin/user/{user}</code></p>
<!-- END_7bc8a51548d7c6e9ac5bc7dda1263ba7 -->
<!-- START_b8a25da15b804e04ecaa4bf05806041e -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/user/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/user/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/user/{user}</code></p>
<!-- END_b8a25da15b804e04ecaa4bf05806041e -->
<!-- START_f66e63c52bdb8ffbb81bcb197259678f -->
<h2>The search function that is called by the data table.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/setting/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/search'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/setting/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/setting/search</code></p>
<!-- END_f66e63c52bdb8ffbb81bcb197259678f -->
<!-- START_0a8f7e81781fdf0bf0876e631df7b925 -->
<h2>Delete multiple entries in one go.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/setting/bulk-delete',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/bulk-delete'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/setting/bulk-delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/bulk-delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/setting/bulk-delete</code></p>
<!-- END_0a8f7e81781fdf0bf0876e631df7b925 -->
<!-- START_8d7d083b60bd27106fe59ac56266cf07 -->
<h2>Reorder the items in the database using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/setting/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/setting/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/setting/reorder</code></p>
<!-- END_8d7d083b60bd27106fe59ac56266cf07 -->
<!-- START_00135945b29d62a8f1d3b9b6d1a16466 -->
<h2>Save the new order, using the Nested Set pattern.</h2>
<p>Database columns needed: id, parent_id, lft, rgt, depth, name/title</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/setting/reorder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/reorder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/setting/reorder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/reorder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/setting/reorder</code></p>
<!-- END_00135945b29d62a8f1d3b9b6d1a16466 -->
<!-- START_696bf63534e54838f9fb09b096e7991a -->
<h2>Used with AJAX in the list view (datatables) to show extra information about that row that didn&#039;t fit in the table.</h2>
<p>It defaults to showing some dummy text.</p>
<p>It's enabled by:</p>
<ul>
<li>setting: $crud-&gt;details_row = true;</li>
<li>adding the details route for the entity; ex: Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');</li>
<li>adding a view with the following name to change what the row actually contains: app/resources/views/vendor/backpack/crud/details_row.blade.php</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/setting/1/details',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/1/details'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/setting/1/details" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/1/details"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/setting/{id}/details</code></p>
<!-- END_696bf63534e54838f9fb09b096e7991a -->
<!-- START_a6f0538b03552422c259fe2078ffbd4b -->
<h2>Display the revisions for specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/setting/1/revisions',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/1/revisions'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/setting/1/revisions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/1/revisions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/setting/{id}/revisions</code></p>
<!-- END_a6f0538b03552422c259fe2078ffbd4b -->
<!-- START_a4f1a14c91ce14a7506efbb335038c7a -->
<h2>Restore a specific revision for the specified resource.</h2>
<p>Used via AJAX in the revisions view</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/setting/1/revisions/1/restore',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/1/revisions/1/restore'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/setting/1/revisions/1/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/1/revisions/1/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/setting/{id}/revisions/{revisionId}/restore</code></p>
<!-- END_a4f1a14c91ce14a7506efbb335038c7a -->
<!-- START_d6023b34217a22789eed72c77eda581c -->
<h2>Create a duplicate of the current entry in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/setting/1/clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/1/clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/setting/1/clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/1/clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/setting/{id}/clone</code></p>
<!-- END_d6023b34217a22789eed72c77eda581c -->
<!-- START_7010b85873314f90cc14a14524caece7 -->
<h2>Create duplicates of multiple entries in the datatabase.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/setting/bulk-clone',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/bulk-clone'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/setting/bulk-clone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/bulk-clone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/setting/bulk-clone</code></p>
<!-- END_7010b85873314f90cc14a14524caece7 -->
<!-- START_fbd03a2bc1205273b0bd8ae9cedb5dd9 -->
<h2>Display all rows in the database for this entity.</h2>
<p>This overwrites the default CrudController behaviour:</p>
<ul>
<li>instead of showing all entries, only show the &quot;active&quot; ones.</li>
</ul>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/setting',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/setting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/setting</code></p>
<!-- END_fbd03a2bc1205273b0bd8ae9cedb5dd9 -->
<!-- START_fdf25a9868b123d602ed1ec1992f5c7e -->
<h2>Show the form for creating inserting a new row.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/setting/create',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/setting/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/setting/create</code></p>
<!-- END_fdf25a9868b123d602ed1ec1992f5c7e -->
<!-- START_2add69499dda5bdb275910b63aa0d957 -->
<h2>admin/setting</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/admin/setting',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/admin/setting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST admin/setting</code></p>
<!-- END_2add69499dda5bdb275910b63aa0d957 -->
<!-- START_c5675f7681902f9dcfecfa07877f65e0 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/setting/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/setting/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/setting/{setting}</code></p>
<!-- END_c5675f7681902f9dcfecfa07877f65e0 -->
<!-- START_90ef18f3a71da8bec5d5a497cd689210 -->
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/setting/1/edit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/setting/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/setting/{setting}/edit</code></p>
<!-- END_90ef18f3a71da8bec5d5a497cd689210 -->
<!-- START_aaad0be7d96969f8a23a9a6cd25380d3 -->
<h2>admin/setting/{setting}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://picoly.touch-media.ro/admin/setting/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X PUT \
    "http://picoly.touch-media.ro/admin/setting/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT admin/setting/{setting}</code></p>
<p><code>PATCH admin/setting/{setting}</code></p>
<!-- END_aaad0be7d96969f8a23a9a6cd25380d3 -->
<!-- START_c51f89aa002f378f89c5af6e714e71ac -->
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://picoly.touch-media.ro/admin/setting/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/setting/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X DELETE \
    "http://picoly.touch-media.ro/admin/setting/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/setting/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE admin/setting/{setting}</code></p>
<!-- END_c51f89aa002f378f89c5af6e714e71ac -->
<!-- START_90a88e68352fae8e7f9e482f144037e4 -->
<h2>admin/elfinder</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/elfinder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/elfinder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/elfinder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/elfinder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/elfinder</code></p>
<!-- END_90a88e68352fae8e7f9e482f144037e4 -->
<!-- START_7731ce701fc6bfe61c3434164a2979a4 -->
<h2>admin/elfinder/connector</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/elfinder/connector',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/elfinder/connector'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/elfinder/connector" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/elfinder/connector"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/elfinder/connector</code></p>
<p><code>POST admin/elfinder/connector</code></p>
<p><code>PUT admin/elfinder/connector</code></p>
<p><code>PATCH admin/elfinder/connector</code></p>
<p><code>DELETE admin/elfinder/connector</code></p>
<p><code>OPTIONS admin/elfinder/connector</code></p>
<!-- END_7731ce701fc6bfe61c3434164a2979a4 -->
<!-- START_1d1bd7b2c3170db1d630a67581c11a35 -->
<h2>admin/elfinder/popup/{input_id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/elfinder/popup/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/elfinder/popup/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/elfinder/popup/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/elfinder/popup/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/elfinder/popup/{input_id}</code></p>
<!-- END_1d1bd7b2c3170db1d630a67581c11a35 -->
<!-- START_283808b1beed83b4e960ec3b6c3c06fb -->
<h2>admin/elfinder/filepicker/{input_id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/elfinder/filepicker/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/elfinder/filepicker/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/elfinder/filepicker/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/elfinder/filepicker/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/elfinder/filepicker/{input_id}</code></p>
<!-- END_283808b1beed83b4e960ec3b6c3c06fb -->
<!-- START_76c5b66bfaeb4b422bc1bda45154d82e -->
<h2>admin/elfinder/tinymce</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/elfinder/tinymce',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/elfinder/tinymce'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/elfinder/tinymce" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/elfinder/tinymce"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/elfinder/tinymce</code></p>
<!-- END_76c5b66bfaeb4b422bc1bda45154d82e -->
<!-- START_95960d0626d6bf209703c0ae8319e514 -->
<h2>admin/elfinder/tinymce4</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/elfinder/tinymce4',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/elfinder/tinymce4'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/elfinder/tinymce4" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/elfinder/tinymce4"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/elfinder/tinymce4</code></p>
<!-- END_95960d0626d6bf209703c0ae8319e514 -->
<!-- START_c64d31c5bcd688bbba58d89102f7d425 -->
<h2>admin/elfinder/ckeditor</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/admin/elfinder/ckeditor',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/admin/elfinder/ckeditor'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/admin/elfinder/ckeditor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/admin/elfinder/ckeditor"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET admin/elfinder/ckeditor</code></p>
<!-- END_c64d31c5bcd688bbba58d89102f7d425 -->
<!-- START_ffeb21a323d661b8d5ed8072620cc36e -->
<h2>laravel-websockets</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/laravel-websockets',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/laravel-websockets'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/laravel-websockets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/laravel-websockets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET laravel-websockets</code></p>
<!-- END_ffeb21a323d661b8d5ed8072620cc36e -->
<!-- START_7a96267d047ecbef5cd21c3dd1691fe0 -->
<h2>laravel-websockets/api/{appId}/statistics</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/laravel-websockets/api/1/statistics',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/laravel-websockets/api/1/statistics'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/laravel-websockets/api/1/statistics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/laravel-websockets/api/1/statistics"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "peak_connections": {
        "x": [],
        "y": []
    },
    "websocket_message_count": {
        "x": [],
        "y": []
    },
    "api_message_count": {
        "x": [],
        "y": []
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET laravel-websockets/api/{appId}/statistics</code></p>
<!-- END_7a96267d047ecbef5cd21c3dd1691fe0 -->
<!-- START_69dd61efc04363546d99d1d7cba7bf4c -->
<h2>laravel-websockets/auth</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/laravel-websockets/auth',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/laravel-websockets/auth'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/laravel-websockets/auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/laravel-websockets/auth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST laravel-websockets/auth</code></p>
<!-- END_69dd61efc04363546d99d1d7cba7bf4c -->
<!-- START_5f593177feb1276b604ea7c2cec73a03 -->
<h2>laravel-websockets/event</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/laravel-websockets/event',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/laravel-websockets/event'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/laravel-websockets/event" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/laravel-websockets/event"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST laravel-websockets/event</code></p>
<!-- END_5f593177feb1276b604ea7c2cec73a03 -->
<!-- START_a114cbb106b4fbbabe00910c4c3fa19c -->
<h2>laravel-websockets/statistics</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/laravel-websockets/statistics',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/laravel-websockets/statistics'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/laravel-websockets/statistics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/laravel-websockets/statistics"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST laravel-websockets/statistics</code></p>
<!-- END_a114cbb106b4fbbabe00910c4c3fa19c -->
<!-- START_fe328bbde38a6eed45ec8611ece27aab -->
<h2>api/connect</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/api/connect',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/connect'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/api/connect" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/connect"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/connect</code></p>
<!-- END_fe328bbde38a6eed45ec8611ece27aab -->
<!-- START_622b4efc02b4f98b6bfbad115bd013ef -->
<h2>api/connectWithVerification</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/api/connectWithVerification',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/connectWithVerification'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/api/connectWithVerification" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/connectWithVerification"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/connectWithVerification</code></p>
<!-- END_622b4efc02b4f98b6bfbad115bd013ef -->
<!-- START_0b56f0708bcb5e45299a74296ef03643 -->
<h2>api/occupyTable</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/api/occupyTable',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/occupyTable'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/api/occupyTable" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/occupyTable"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/occupyTable</code></p>
<!-- END_0b56f0708bcb5e45299a74296ef03643 -->
<!-- START_3d0dd3897a8296dd2503a4cbd604408b -->
<h2>api/callWaiter</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/api/callWaiter',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/callWaiter'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/api/callWaiter" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/callWaiter"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/callWaiter</code></p>
<!-- END_3d0dd3897a8296dd2503a4cbd604408b -->
<!-- START_d9699a0fd3ef3b503cdd35d1f004c371 -->
<h2>api/requestBill</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/api/requestBill',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/requestBill'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/api/requestBill" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/requestBill"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/requestBill</code></p>
<!-- END_d9699a0fd3ef3b503cdd35d1f004c371 -->
<!-- START_393e78cb8a747e3fca758271bd7e3de7 -->
<h2>api/leaveTable</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/api/leaveTable',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/leaveTable'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/api/leaveTable" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/leaveTable"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/leaveTable</code></p>
<!-- END_393e78cb8a747e3fca758271bd7e3de7 -->
<!-- START_787a26fd78748e5806736996dc8037b9 -->
<h2>api/dndTable</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/api/dndTable',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/dndTable'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/api/dndTable" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/dndTable"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/dndTable</code></p>
<!-- END_787a26fd78748e5806736996dc8037b9 -->
<!-- START_466a9672f9765ffdc0d94a5c0ee4d9bc -->
<h2>api/cancelOrder</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/api/cancelOrder',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/cancelOrder'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/api/cancelOrder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/cancelOrder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/cancelOrder</code></p>
<!-- END_466a9672f9765ffdc0d94a5c0ee4d9bc -->
<!-- START_ca9cf277facfa1080dc09f1fa5e4b1cd -->
<h2>api/oneMoreTurn</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/api/oneMoreTurn',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/oneMoreTurn'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/api/oneMoreTurn" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/oneMoreTurn"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/oneMoreTurn</code></p>
<!-- END_ca9cf277facfa1080dc09f1fa5e4b1cd -->
<!-- START_5cf062e8617632217fd502557275865a -->
<h2>api/getDeals</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/api/getDeals',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/getDeals'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/api/getDeals" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/getDeals"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/getDeals</code></p>
<!-- END_5cf062e8617632217fd502557275865a -->
<!-- START_ac6982a4319a451c81f0d44d6bc3cd6d -->
<h2>api/leaveReview</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/api/leaveReview',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/leaveReview'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/api/leaveReview" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/leaveReview"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/leaveReview</code></p>
<!-- END_ac6982a4319a451c81f0d44d6bc3cd6d -->
<!-- START_a04cf579ae407ea903af8f41c43a1755 -->
<h2>api/getStatics</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/api/getStatics',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/getStatics'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/api/getStatics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/getStatics"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/getStatics</code></p>
<!-- END_a04cf579ae407ea903af8f41c43a1755 -->
<!-- START_00ae3f4154a4428224db831893d7a732 -->
<h2>api/getLang</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/api/getLang',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/getLang'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/api/getLang" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/getLang"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "strings": {
        "en": {
            "welcome-title": "SALUT!",
            "welcome-text": "Scanează codul de pe masă ca să te conectezi la această locație.",
            "welcome-scan": "Scanează codul",
            "button-demo": "Demo",
            "firstTimeTitle1": "Use the app when you need a waiter",
            "firstTimeDescription1": "Click on the type of service you need.",
            "firstTimeTitle2": "The waiter will come to you as soon as he is released",
            "firstTimeDescription2": "This way, you are sure that you will be served exactly when you need it.",
            "firstTimeTitle3": "Some options offered by the application:",
            "firstTimeDescription3": "Ask the waiter to come to the table, refill the drink and ask for the note directly from the app.",
            "continue": "Continue",
            "skip": "Skip the explanations.",
            "welcomeTitle": "HI!",
            "welcomeScan": "Scan the code on the table to connect to this location.",
            "scan": "Scan the code",
            "demo": "Demo",
            "welcome": "Welcome!",
            "dashboardSubtitle": "Whenever you need a waiter, call him with the help of the application.",
            "callWaiter": "call a waiter",
            "anotherTime": "Another round",
            "cancelCommand": "Cancel the order",
            "paycheck": "Bill",
            "thankYou": "Thank you!",
            "freeWaiter": "A waiter will come to you as soon as he is released.",
            "confirmCommand": "Confirm command",
            "yes": "Yes",
            "no": "No",
            "noShow": "Stop displaying confirmation message.",
            "scanCode": "Scan a code",
            "alreadyCalled": "You have already requested the grade. The waiter will come as soon as he is released.",
            "notTable": "You are no longer connected to this table",
            "reScam": "Scan the QR code of a table to continue",
            "giveUp": "Cancel",
            "scanButton": "Scan",
            "actionQr": "To do this you need to scan the QR code of a table",
            "pleaseWait": "Please wait",
            "alright": "Alright",
            "sureNote": "Are you sure you want to request the grade?",
            "sureWaiter": "Are you sure you want to call the waiter?",
            "sureTry": "Are you sure you want to request another round?",
            "sureCancel": "Are you sure you want to cancel the order?",
            "askNote": "Request note",
            "howPay": "How do you want to pay the bill?",
            "cash": "Cash",
            "card": "Card",
            "notConnected": "You are no longer connected to this table",
            "offersTitle": "Offers",
            "offersScan": "Scan a code to continue.",
            "offers": "Offers",
            "menu": "Menu",
            "menuNot": "Menu unavailable",
            "rating1": "Very dissatisfied!",
            "rating2": "Dissatisfied!",
            "rating3": "It's ok",
            "rating4": "Satisfied!",
            "rating5": "Very pleased!",
            "sendRating": "Give us a rating",
            "woulrdRating": "We would like you to leave us a rating",
            "noThanks": "No, thanks",
            "mandatoryField": "Required field!",
            "feedback": "To send your feedback, you must choose a serving note",
            "gotIt": "I understand",
            "feedbackSent": "Your feedback has been sent.",
            "further": "Next",
            "pleaseEvaluate": "Please rate the services and products offered.",
            "howAbout": "How did you like the service?",
            "drink": "How did you like the drink \/ food?",
            "moreInformations": "Other details:",
            "send": "Send",
            "help": "Help",
            "helpTitle1": "Use the app when you need a waiter",
            "helpText1": "Click on the type of service you need.",
            "helpTitle2": "The waiter will come to you as soon as he is released.",
            "helpText2": "This way, you are sure that you will be served exactly when you need it.",
            "helpTitle3": "Some options offered by the application:",
            "helpText3": "Ask the waiter to come to the table, refill the drink and ask for the note directly from the app.",
            "openCart": "Open cart",
            "rescanCode": "Scan the code",
            "aboutApp": "About applications",
            "policy": "Privacy policy",
            "aboutUsText": "About us",
            "back": "Back",
            "selectLanguage": "Select language",
            "command": "Order",
            "menuTitle": "Menu Bueno",
            "menuDescription": "Discover the latest products and call the waiter to order.",
            "openMenu": "Browse Menu",
            "offersDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.",
            "openOffers": "Browse Offers",
            "serviciesTitle": "Servicies",
            "serviciesDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.",
            "openServicies": "Browse Servicies",
            "breakfast": "Breakfast",
            "lunch": "Lunch",
            "dinner": "Dinner",
            "desert": "Desert",
            "drinks": "Drinks",
            "shanghaiChicken": "Shanghai chicken",
            "shanghaiChickenDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "calories": "Calories",
            "weight": "Weight",
            "grilledSalmon": "Grilled Salmon",
            "grilledSalmonDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "potatoStew": "Potato Stew",
            "potatoStewDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "beefSoup": "Beef Soup",
            "beefSoupDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "offerDay": "Offer of the day",
            "offerDayDescription": "Coffe + Pepsi = 10 Lei. Come to us today and you can benefit from the offer of the day.",
            "weekendOffer": "Weekend with offers",
            "weekendOfferDescription": "Come with your friends and for every 3 pizzas ordered you receive one for free.",
            "allServicies": "All servicies",
            "areaTour": "Tour of the area",
            "massage": "Massage",
            "massageDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "festiveEvents": "Festive events",
            "festiveEventsDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "touristTour": "Tourist tour",
            "touristTourDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "treatments": "Treatments",
            "treatmentsDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "bikeTrips": "Bike trips",
            "bikeTripsDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "orderService": "Order the service",
            "plainWater": "Plain water",
            "otherDetails": "Other details",
            "total": "Total",
            "sendOrder": "Send order",
            "orderTable": "Table 1 terrace",
            "selectQuantity": "Product quantity must be greater than 0",
            "addToCart": "Add to cart",
            "checkCommand": "You added everything to the cart?",
            "writeUs": "Write us what you want",
            "completeForm": "Fill in this form with what service you want to offer."
        },
        "ro": {
            "aboutUsText": "About us",
            "sendRating": "Acorda rating",
            "alreadyCalled": "Ai cerut deja nota. Ospătarul va veni imediat cum se eliberează.",
            "help": "Ajutor",
            "moreInformations": "Alte detalii:",
            "gotIt": "Am înțeles",
            "cancelCommand": "Anulează comanda",
            "firstTimeDescription1": "Apasă pe tipul de serviciu de care ai nevoie.",
            "helpText1": "Apasă pe tipul de serviciu de care ai nevoie.",
            "callWaiter": "Apel ospătar",
            "openCart": "Vezi coșul",
            "firstTimeDescription2": "Astfel, ești sigur că o să fii servit exact în momentele în care ai nevoie.",
            "helpText2": "Astfel, ești sigur că o să fii servit exact în momentele în care ai nevoie.",
            "rating3": "Așa și așa!",
            "welcome": "Bine ai venit!",
            "card": "Card",
            "askNote": "Cere nota",
            "firstTimeDescription3": "Cere să vină ospătarul la masă, reumple băutura și cere nota direct din aplicație.",
            "helpText3": "Cere să vină ospătarul la masă, reumple băutura și cere nota direct din aplicație.",
            "confirmCommand": "Confirmă commanda",
            "continue": "Continuă",
            "howPay": "Cum dorești să achiți nota?",
            "drink": "Cum ți s-a părut băutura \/ mâncarea?",
            "howAbout": "Cum ți s-a părut servirea?",
            "mandatoryField": "Câmp obligatoriu!",
            "helpTitle3": "Câteva opțiuni oferite de aplicație:",
            "firstTimeTitle3": "Câteva opțiuni oferite de aplicație:",
            "yes": "Da",
            "demo": "Demo",
            "button-demo": "Demo",
            "aboutApp": "Despre aplicați",
            "sureCancel": "Ești sigur că dorești să anulezi comanda?",
            "sureTry": "Ești sigur că dorești să ceri inca o tură?",
            "sureNote": "Ești sigur că dorești să ceri nota?",
            "sureWaiter": "Ești sigur că dorești să chemi ospătarul?",
            "feedbackSent": "Feedback-ul tău a fost trimis.",
            "rating5": "Foarte mulțumit!",
            "rating1": "Foarte nemulțumit!",
            "helpTitle1": "Folosește aplicația când ai nevoie de ospătar",
            "firstTimeTitle1": "Folosiți aplicația atunci când aveți nevoie de o așteptare",
            "further": "Mai departe",
            "menu": "Meniu",
            "menuNot": "Meniu indisponibil",
            "thankYou": "Mulțumim!",
            "rating4": "Mulțumit!",
            "woulrdRating": "Ne-ar placea sa ne lasi un rating",
            "rating2": "Nemulțumit!",
            "paycheck": "Nota de plată",
            "no": "Nu",
            "noShow": "Nu mai afișa mesajul de confirmare.",
            "notTable": "Nu mai esti conectat la aceasta masa",
            "noThanks": "Nu multumesc",
            "cash": "Numerar",
            "offers": "Oferte",
            "dashboardSubtitle": "Oricând ai nevoie de ospătar, cheamă-l cu ajutorul aplicației.",
            "firstTimeTitle2": "Ospătarul o să vină la tine imediat ce se eliberează",
            "helpTitle2": "Ospătarul o să vină la tine imediat ce se eliberează.",
            "actionQr": "Pentru a face această acțiune trebuie să scanezi codul QR al unei mese",
            "feedback": "Pentru a trimite feedback-ul tău, trebuie să alegi o notă pentru servire",
            "policy": "Politica de confidențialitate",
            "giveUp": "Renunță",
            "rescanCode": "Rescanează codul",
            "reScam": "Rescanează codul QR al unei mese pentru a continua",
            "welcome-title": "SALUT!",
            "welcomeTitle": "Salut!",
            "scanButton": "Scanează",
            "welcome-scan": "Scanează codul",
            "scan": "Scanează codul",
            "welcome-text": "Scanează codul de pe masă ca să te conectezi la această locație.",
            "welcomeScan": "Scanează codul de pe masă ca să te conectezi la această locație.",
            "scanCode": "Scanează un cod",
            "offersScan": "Scanează un cod pentru a continua.",
            "selectLanguage": "Selecteaza limba",
            "pleaseWait": "Te rugăm să aștepți",
            "pleaseEvaluate": "Te rugăm să evaluezi serviciile și produsele oferite.",
            "skip": "Treci peste explicații.",
            "send": "Trimite",
            "freeWaiter": "Un ospătar o să vină la tine imediat după ce se eliberează.",
            "notConnected": "re",
            "offersTitle": "Oferte",
            "alright": "În regulă",
            "back": "Înapoi",
            "anotherTime": "Încă o tură",
            "command": "Comandă",
            "menuTitle": "Menu Bueno",
            "menuDescription": "Descoperă ultimele produse din meniu si cheamă chelnerul pentru a comanda.",
            "openMenu": "Vezi Meniul",
            "offersDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.",
            "openOffers": "Vezi Ofertele",
            "serviciesTitle": "Servicii",
            "serviciesDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.",
            "openServicies": "Vezi Serviciile",
            "breakfast": "Mic dejun",
            "lunch": "Prânz",
            "dinner": "Cină",
            "desert": "Desert",
            "drinks": "Băuturi",
            "shanghaiChicken": "Pui Shanghai",
            "shanghaiChickenDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "calories": "Calorii",
            "weight": "Gramaj",
            "grilledSalmon": "Somon la grătar",
            "grilledSalmonDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "potatoStew": "Tocăniță de cartofi",
            "potatoStewDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "beefSoup": "Ciorbă de vacuță",
            "beefSoupDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "offerDay": "Oferta zilei",
            "offerDayDescription": "Cafea + Pepsi = 10 Lei. Vino azi la noi și poți beneficia de oferta zilei.",
            "weekendOffer": "Weekend cu oferte",
            "weekendOfferDescription": "Vino cu prietenii tăi si la fiecare 3 pizza comandate primești una gratis.",
            "allServicies": "Toate",
            "areaTour": "Tur al zonei",
            "massage": "Masaj",
            "massageDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "festiveEvents": "Evenimente festive",
            "festiveEventsDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "touristTour": "Tur turistic",
            "touristTourDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "treatments": "Tratamente",
            "treatmentsDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor",
            "bikeTrips": "Excursii cu bicicleta",
            "bikeTripsDescription": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "orderService": "Comandă serviciul",
            "plainWater": "Apă plată",
            "otherDetails": "Alte detalii",
            "total": "Total",
            "sendOrder": "Trimite comanda",
            "orderTable": "Masa 1 terasă",
            "selectQuantity": "Cantitatea trebuie să fie mai mare decât 0",
            "addToCart": "Adaugă în coș",
            "checkCommand": "Ai adăugat tot în coș?",
            "writeUs": "Scrie-ne ce îți dorești",
            "completeForm": "Completează acest formular cu ce servicii dorești să-ți oferim."
        },
        "se": {
            "welcome-title": "SALUT!",
            "welcome-text": "Scanează codul de pe masă ca să te conectezi la această locație.",
            "welcome-scan": "Scanează codul",
            "button-demo": "Demo",
            "firstTimeTitle1": "Use the app when you need a waiter",
            "firstTimeDescription1": "Click on the type of service you need.",
            "firstTimeTitle2": "The waiter will come to you as soon as he is released",
            "firstTimeDescription2": "This way, you are sure that you will be served exactly when you need it.",
            "firstTimeTitle3": "Some options offered by the application:",
            "firstTimeDescription3": "Ask the waiter to come to the table, refill the drink and ask for the note directly from the app.",
            "continue": "Continue",
            "skip": "Skip the explanations.",
            "welcomeTitle": "HI!",
            "welcomeScan": "Scan the code on the table to connect to this location.",
            "scan": "Scan the code",
            "demo": "Demo",
            "welcome": "Welcome!",
            "dashboardSubtitle": "Whenever you need a waiter, call him with the help of the application.",
            "callWaiter": "call a waiter",
            "anotherTime": "Another round",
            "cancelCommand": "Cancel the order",
            "paycheck": "Bill",
            "thankYou": "Thank you!",
            "freeWaiter": "A waiter will come to you as soon as he is released.",
            "confirmCommand": "Confirm order",
            "yes": "Yes",
            "no": "No",
            "noShow": "Stop displaying confirmation message.",
            "scanCode": "Scan a code",
            "alreadyCalled": "You have already requested the grade. The waiter will come as soon as he is released.",
            "notTable": "You are no longer connected to this table",
            "reScam": "Scan the QR code of a table to continue",
            "giveUp": "Cancel",
            "scanButton": "Scan",
            "actionQr": "To do this you need to scan the QR code of a table",
            "pleaseWait": "Please wait",
            "alright": "Alright",
            "sureNote": "Are you sure you want to request the grade?",
            "sureWaiter": "Are you sure you want to call the waiter?",
            "sureTry": "Are you sure you want to request another round?",
            "sureCancel": "Are you sure you want to cancel the order?",
            "askNote": "Request note",
            "howPay": "How do you want to pay the bill?",
            "cash": "Cash",
            "card": "Card",
            "notConnected": "You are no longer connected to this table",
            "offersTitle": "In this section you can find the best offers of the location.",
            "offersScan": "Scan a code to continue.",
            "offers": "Offers",
            "menu": "Menu",
            "menuNot": "Menu unavailable",
            "rating1": "Very dissatisfied!",
            "rating2": "Dissatisfied!",
            "rating3": "It's ok",
            "rating4": "Satisfied!",
            "rating5": "Very pleased!",
            "sendRating": "Give us a rating",
            "woulrdRating": "We would like you to leave us a rating",
            "noThanks": "No, thanks",
            "mandatoryField": "Required field!",
            "feedback": "To send your feedback, you must choose a serving note",
            "gotIt": "I understand",
            "feedbackSent": "Your feedback has been sent.",
            "further": "Next",
            "pleaseEvaluate": "Please rate the services and products offered.",
            "howAbout": "How did you like the service?",
            "drink": "How did you like the drink \/ food?",
            "moreInformations": "Other details:",
            "send": "Send",
            "help": "Help",
            "helpTitle1": "Use the app when you need a waiter",
            "helpText1": "Click on the type of service you need.",
            "helpTitle2": "The waiter will come to you as soon as he is released.",
            "helpText2": "This way, you are sure that you will be served exactly when you need it.",
            "helpTitle3": "Some options offered by the application:",
            "helpText3": "Ask the waiter to come to the table, refill the drink and ask for the note directly from the app.",
            "rescanCode": "Scan the code",
            "aboutApp": "About applications",
            "policy": "Privacy policy",
            "aboutUsText": "About us",
            "back": "Back",
            "selectLanguage": "Select language"
        }
    },
    "langs": [
        {
            "id": 1,
            "name": "English",
            "abbr": "en",
            "script": "Latn",
            "native": "English",
            "default": 0
        },
        {
            "id": 2,
            "name": "Romanian",
            "abbr": "ro",
            "script": "Latn",
            "native": "română",
            "default": 1
        },
        {
            "id": 8,
            "name": "Sweedish",
            "abbr": "se",
            "script": null,
            "native": "se",
            "default": 0
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/getLang</code></p>
<!-- END_00ae3f4154a4428224db831893d7a732 -->
<!-- START_4fbc0621d5681ec37e094a769bf688f2 -->
<h2>api/pusher/auth</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/api/pusher/auth',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/api/pusher/auth'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/api/pusher/auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/api/pusher/auth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/pusher/auth</code></p>
<!-- END_4fbc0621d5681ec37e094a769bf688f2 -->
<!-- START_66e08d3cc8222573018fed49e121e96d -->
<h2>login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/login',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/login'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET login</code></p>
<!-- END_66e08d3cc8222573018fed49e121e96d -->
<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
<h2>/</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET /</code></p>
<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->
<!-- START_dde25db1eefbadbbc8ca25433f9f214f -->
<h2>rating</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/rating',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/rating'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/rating" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/rating"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET rating</code></p>
<!-- END_dde25db1eefbadbbc8ca25433f9f214f -->
<!-- START_093ec7e72da3a515f4f1521e292fe92c -->
<h2>signin</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/signin',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/signin'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/signin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/signin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST signin</code></p>
<!-- END_093ec7e72da3a515f4f1521e292fe92c -->
<!-- START_568bd749946744d2753eaad6cfad5db6 -->
<h2>logout</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/logout',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET logout</code></p>
<!-- END_568bd749946744d2753eaad6cfad5db6 -->
<!-- START_8f437f2bbe18e20d8bb71759e2d522d6 -->
<h2>downloadPDF/{id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://picoly.touch-media.ro/downloadPDF/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/downloadPDF/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X GET \
    -G "http://picoly.touch-media.ro/downloadPDF/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/downloadPDF/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET downloadPDF/{id}</code></p>
<!-- END_8f437f2bbe18e20d8bb71759e2d522d6 -->
<!-- START_fee310a89f24e8e412fc5929d2b37a4b -->
<h2>pusher/auth</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://picoly.touch-media.ro/pusher/auth',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://picoly.touch-media.ro/pusher/auth'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://picoly.touch-media.ro/pusher/auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://picoly.touch-media.ro/pusher/auth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST pusher/auth</code></p>
<!-- END_fee310a89f24e8e412fc5929d2b37a4b -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="php">php</a>
                                    <a href="#" data-language-name="python">python</a>
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>
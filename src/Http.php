<?php

namespace attax\EasyHttp;


/**
 * @method static \attax\EasyHttp\Request asJson()
 * @method static \attax\EasyHttp\Request asForm()
 * @method static \attax\EasyHttp\Request asMultipart(string $name, string $contents, string|null $filename = null, array $headers)
 * @method static \attax\EasyHttp\Request attach(string $name, string $contents, string|null $filename = null, array $headers)
 *
 * @method static \attax\EasyHttp\Request withRedirect(bool|array $redirect)
 * @method static \attax\EasyHttp\Request withStream(bool $boolean)
 * @method static \attax\EasyHttp\Request withVerify(bool|string $verify)
 * @method static \attax\EasyHttp\Request withHost(string $host)
 * @method static \attax\EasyHttp\Request withHeaders(array $headers)
 * @method static \attax\EasyHttp\Request withBody($content,$contentType='application/json')
 * @method static \attax\EasyHttp\Request withBasicAuth(string $username, string $password)
 * @method static \attax\EasyHttp\Request withDigestAuth(string $username, string $password)
 * @method static \attax\EasyHttp\Request withUA(string $ua)
 * @method static \attax\EasyHttp\Request withToken(string $token, string $type = 'Bearer')
 * @method static \attax\EasyHttp\Request withCookies(array $cookies, string $domain)
 * @method static \attax\EasyHttp\Request withProxy(string|array $proxy)
 * @method static \attax\EasyHttp\Request withVersion(string $version)
 * @method static \attax\EasyHttp\Request withOptions(array $options)
 * @method static \attax\EasyHttp\Request withMiddleware(callable $middleware)
 * @method static \attax\EasyHttp\Request withRequestMiddleware(callable $middleware)
 * @method static \attax\EasyHttp\Request withResponseMiddleware(callable $middleware)
 *
 * @method static \attax\EasyHttp\Request debug($class)
 * @method static \attax\EasyHttp\Request retry(int $retries=1,int $sleep=0)
 * @method static \attax\EasyHttp\Request delay(int $seconds)
 * @method static \attax\EasyHttp\Request timeout(float $seconds)
 * @method static \attax\EasyHttp\Request connectTimeout(float $seconds)
 * @method static \attax\EasyHttp\Request sink(string|resource $to)
 * @method static \attax\EasyHttp\Request concurrency(int $times)
 * @method static \attax\EasyHttp\Request removeBodyFormat()
 * @method static \attax\EasyHttp\Request maxRedirects(int $max)
 *
 * @method static \attax\EasyHttp\Response get(string $url, array $query = [])
 * @method static \attax\EasyHttp\Response post(string $url, array $data = [])
 * @method static \attax\EasyHttp\Response patch(string $url, array $data = [])
 * @method static \attax\EasyHttp\Response put(string $url, array $data = [])
 * @method static \attax\EasyHttp\Response delete(string $url, array $data = [])
 * @method static \attax\EasyHttp\Response head(string $url, array $data = [])
 * @method static \attax\EasyHttp\Response options(string $url, array $data = [])
 * @method static \attax\EasyHttp\Response client(string $method, string $url, array $options = [])
 * @method static \attax\EasyHttp\Response clientAsync(string $method, string $url, array $options = [])
 *
 * @method static \GuzzleHttp\Promise\PromiseInterface getAsync(string $url, array|null $query = null, callable $success = null, callable $fail = null)
 * @method static \GuzzleHttp\Promise\PromiseInterface postAsync(string $url, array|null $data = null, callable $success = null, callable $fail = null)
 * @method static \GuzzleHttp\Promise\PromiseInterface patchAsync(string $url, array|null $data = null, callable $success = null, callable $fail = null)
 * @method static \GuzzleHttp\Promise\PromiseInterface putAsync(string $url, array|null $data = null, callable $success = null, callable $fail = null)
 * @method static \GuzzleHttp\Promise\PromiseInterface deleteAsync(string $url, array|null $data = null, callable $success = null, callable $fail = null)
 * @method static \GuzzleHttp\Promise\PromiseInterface headAsync(string $url, array|null $data = null, callable $success = null, callable $fail = null)
 * @method static \GuzzleHttp\Promise\PromiseInterface optionsAsync(string $url, array|null $data = null, callable $success = null, callable $fail = null)
 * @method static \GuzzleHttp\Pool multiAsync(array $promises, callable $success = null, callable $fail = null)
 * @method static void wait()
 */

class Http extends Facade
{
    protected $facade = Request::class;
}

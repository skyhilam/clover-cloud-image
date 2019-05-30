<?php

namespace Clover\CloudImage;

use GuzzleHttp\Client;
use Illuminate\Http\UploadedFile;

class CloudImage{
    private $uri;

    private $client;

    protected $folder;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => $this->uri = config('cloud-image.uri'),
            'timeout' => 120
        ]);
        $this->folder = config('cloud-image.folder');
    }

    public function folder($folder)
    {
        $this->folder = $folder;
        return $this;
    }

    /**
    * @return image uuid as string
    **/
    public function upload(UploadedFile $file)
    {
        $response = $this->client->post('/file', [
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen($file->path(), 'r'),
                ],
                [
                    'name' => 'folder',
                    'contents' => $this->folder
                ]
            ]
        ]);

        return $response->getBody();
    }

    public function copy($filename)
    {
        $response = $this->client->post('/copy', [
            'form_params' => [
                'filename' => $filename,
                'folder' => $this->folder
            ]
        ]);

        return $response->getBody();
    }

    public function exists($filename)
    {
        $response = $this->client->post('/exists', [
            'form_params' => [
                'filename' => $filename,
                'folder' => $this->folder
            ]
        ]);

        return $response->getBody()->getContents() === 'true';
    }

    public function delete($filename)
    {
        $response = $this->client->delete('/file', [
            'form_params' => [
                'filename' => $filename,
                'folder' => $this->folder
            ]
        ]);

        return $response->getBody();
    }

    public function get($filename, $params = [])
    {
        $string = empty($params)? '': '?'.http_build_query($params);
        return $this->uri.'/'. $this->folder. '/'. $filename. $string;
    }
}

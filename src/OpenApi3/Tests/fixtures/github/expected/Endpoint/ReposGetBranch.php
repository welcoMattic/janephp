<?php

namespace Github\Endpoint;

class ReposGetBranch extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $branch;
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $branch branch+ parameter
     */
    public function __construct(string $owner, string $repo, string $branch)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->branch = $branch;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{branch}'), array($this->owner, $this->repo, $this->branch), '/repos/{owner}/{repo}/branches/{branch}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ReposGetBranchUnsupportedMediaTypeException
     * @throws \Github\Exception\ReposGetBranchNotFoundException
     *
     * @return null|\Github\Model\BranchWithProtection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\BranchWithProtection', 'json');
        }
        if (415 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposGetBranchUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposGetBranchNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}
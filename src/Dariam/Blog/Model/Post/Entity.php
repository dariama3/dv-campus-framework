<?php
declare(strict_types=1);

namespace Dariam\Blog\Model\Post;

class Entity
{
    private int $postId;

    private string $name;

    private string $url;

    private string $content;

    private string $author;

    private string $createdAt;

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     * @return $this
     */
    public function setPostId(int $postId): Entity
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): Entity
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url): Entity
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent(string $content): Entity
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return $this
     */
    public function setAuthor(string $author): Entity
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt): Entity
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}

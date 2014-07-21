<?php

namespace Extractor\Test;

use Extractor\Entity\Post;

use PHPUnit_Framework_TestCase;

use DateTime;

class PostTest extends PHPUnit_Framework_TestCase
{
	/** @var Post $post */
	protected $post;

	public function setUp()
	{
		$this->post = new Post(1, 'Author', new DateTime('0000-00-00 10:10:10'), 'Content');
	}

	/**
	 * Test: id related methods
	 */
	public function testGetSetId()
	{
		$id   = 101010;
		$post = $this->post->setId($id);

		$this->assertInstanceOf('Extractor\Entity\Post', $post);
		$this->assertEquals($id, $this->post->getId());
	}

	/**
	 * Test: author related methods
	 */
	public function testGetSetAuthor()
	{
		$author = 'Richard';
		$post   = $this->post->setAuthor($author);

		$this->assertInstanceOf('Extractor\Entity\Post', $post);
		$this->assertEquals($author, $this->post->getAuthor());
	}

	/**
	 * Test: date time related methods
	 */
	public function testGetSetDateTime()
	{
		$date = new DateTime('0010-00-01 10:00:10');
		$post = $this->post->setDate($date);

		$this->assertInstanceOf('Extractor\Entity\Post', $post);
		$this->assertEquals($date, $this->post->getDate());
	}

	/**
	 * Test: content related methods
	 */
	public function testGetSetContent()
	{
		$content = 'Test.';
		$post = $this->post->setContent($content);

		$this->assertInstanceOf('Extractor\Entity\Post', $post);
		$this->assertEquals($content, $this->post->getContent());
	}
}

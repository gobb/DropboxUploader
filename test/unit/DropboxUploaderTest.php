<?php
/**
 * This file is part of Dropbox Uploader
 *
 * Phpunit test-suite
 */

class DropboxUploaderTest extends BaseTestCase
{
    public function testConstructor() {
        $this->addToAssertionCount(1);
        $uploader = new DropboxUploader('email', 'pass');
    }

    public function testSetters() {
        $uploader = new DropboxUploader('email', 'pass');

        $this->addToAssertionCount(1);
        $uploader->setCaCertificateDir('');

        $this->addToAssertionCount(1);
        $uploader->setCaCertificateFile('');
    }
}
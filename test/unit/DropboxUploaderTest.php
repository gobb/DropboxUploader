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
        $this->assertInstanceOf('DropboxUploader', $uploader);


        $exception = false;
        try {
            $this->addToAssertionCount(1);
            $uploader = new DropboxUploader('', '');
        } catch (Exception $e) {
            $code = $uploader::CODE_PARAMETER_TYPE_ERROR;
            $this->assertSame($code, $e->getCode());
            $exception = true;
        }
        $this->assertSame(true, $exception);

        $exception = false;

        try {
            $this->addToAssertionCount(1);
            $uploader = new DropboxUploader('email', '');
        } catch (Exception $e) {
            $code = $uploader::CODE_PARAMETER_TYPE_ERROR;
            $this->assertSame($code, $e->getCode());
            $exception = true;
        }
        $this->assertSame(true, $exception);
    }

    public function testSetters() {
        $uploader = new DropboxUploader('email', 'pass');

        $this->addToAssertionCount(1);
        $uploader->setCaCertificateDir('');

        $this->addToAssertionCount(1);
        $uploader->setCaCertificateFile('');
    }
}
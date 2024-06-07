<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\ElectronicSeal\DeleteElectronicSealImage;
use Elegantly\Yousign\Integration\Requests\ElectronicSeal\DownloadElectronicSealAuditTrail;
use Elegantly\Yousign\Integration\Requests\ElectronicSeal\DownloadElectronicSealDocument;
use Elegantly\Yousign\Integration\Requests\ElectronicSeal\DownloadElectronicSealImage;
use Elegantly\Yousign\Integration\Requests\ElectronicSeal\GetElectronicSeal;
use Elegantly\Yousign\Integration\Requests\ElectronicSeal\GetElectronicSealAuditTrail;
use Elegantly\Yousign\Integration\Requests\ElectronicSeal\ListElectronicSealImages;
use Elegantly\Yousign\Integration\Requests\ElectronicSeal\PostElectronicSeals;
use Elegantly\Yousign\Integration\Requests\ElectronicSeal\UploadElectronicSealDocument;
use Elegantly\Yousign\Integration\Requests\ElectronicSeal\UploadElectronicSealImage;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Contracts\Response;

class ElectronicSeal extends Resource
{
	public function postElectronicSeals(): Response
	{
		return $this->connector->send(new PostElectronicSeals());
	}


	/**
	 * @param string $electronicSealId
	 */
	public function getElectronicSeal(string $electronicSealId): Response
	{
		return $this->connector->send(new GetElectronicSeal($electronicSealId));
	}


	/**
	 * @param string $electronicSealId
	 */
	public function getElectronicSealAuditTrail(string $electronicSealId): Response
	{
		return $this->connector->send(new GetElectronicSealAuditTrail($electronicSealId));
	}


	/**
	 * @param string $electronicSealId
	 */
	public function downloadElectronicSealAuditTrail(string $electronicSealId): Response
	{
		return $this->connector->send(new DownloadElectronicSealAuditTrail($electronicSealId));
	}


	public function uploadElectronicSealDocument(): Response
	{
		return $this->connector->send(new UploadElectronicSealDocument());
	}


	/**
	 * @param string $electronicSealDocumentId
	 */
	public function downloadElectronicSealDocument(string $electronicSealDocumentId): Response
	{
		return $this->connector->send(new DownloadElectronicSealDocument($electronicSealDocumentId));
	}


	public function listElectronicSealImages(): Response
	{
		return $this->connector->send(new ListElectronicSealImages());
	}


	public function uploadElectronicSealImage(): Response
	{
		return $this->connector->send(new UploadElectronicSealImage());
	}


	/**
	 * @param string $electronicSealImageId
	 */
	public function downloadElectronicSealImage(string $electronicSealImageId): Response
	{
		return $this->connector->send(new DownloadElectronicSealImage($electronicSealImageId));
	}


	/**
	 * @param string $electronicSealImageId
	 */
	public function deleteElectronicSealImage(string $electronicSealImageId): Response
	{
		return $this->connector->send(new DeleteElectronicSealImage($electronicSealImageId));
	}
}

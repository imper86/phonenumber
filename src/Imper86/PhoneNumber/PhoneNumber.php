<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 21.07.17
 * Time: 14:37
 */

namespace Imper86\PhoneNumber;


use libphonenumber\PhoneNumber as BasePhoneNumber;
use libphonenumber\PhoneNumberFormat;
use libphonenumber\PhoneNumberUtil;

class PhoneNumber implements PhoneNumberInterface
{
    /**
     * @var PhoneNumberUtil
     */
    private $phoneNumberUtil;

    /**
     * @var BasePhoneNumber
     */
    private $phoneNumber;

    public function __construct(string $phoneNumber, string $defaultRegion = 'PL')
    {
        $this->phoneNumberUtil = PhoneNumberUtil::getInstance();
        $this->phoneNumber = $this->phoneNumberUtil->parse($phoneNumber, $defaultRegion);
    }

    public function getCountryCode(): ?int
    {
        return $this->phoneNumber->getCountryCode();
    }

    public function getNationalNumber(): ?string
    {
        return $this->phoneNumber->getNationalNumber();
    }

    public function getExtension(): ?string
    {
        return $this->phoneNumber->getExtension();
    }

    public function getRawInput(): ?string
    {
        return $this->phoneNumber->getRawInput();
    }

    public function isPossibleNumber(): bool
    {
        return $this->phoneNumberUtil->isPossibleNumber($this->phoneNumber);
    }

    public function isValidNumber(): bool
    {
        return $this->phoneNumberUtil->isValidNumber($this->phoneNumber);
    }

    public function getRegionCodeForNumber(): ?string
    {
        return $this->phoneNumberUtil->getRegionCodeForNumber($this->phoneNumber);
    }

    public function getNumberType(): int
    {
        return $this->phoneNumberUtil->getNumberType($this->phoneNumber);
    }

    public function getIsMobile(): bool
    {
        return $this->getNumberType() === 1;
    }

    public function formatE164(): string
    {
        return $this->phoneNumberUtil->format($this->phoneNumber, PhoneNumberFormat::E164);
    }

    public function formatInternational(): string
    {
        return $this->phoneNumberUtil->format($this->phoneNumber, PhoneNumberFormat::INTERNATIONAL);
    }

    public function formatNational(): string
    {
        return $this->phoneNumberUtil->format($this->phoneNumber, PhoneNumberFormat::NATIONAL);
    }

    public function formatRFC3966(): string
    {
        return $this->phoneNumberUtil->format($this->phoneNumber, PhoneNumberFormat::RFC3966);
    }
}
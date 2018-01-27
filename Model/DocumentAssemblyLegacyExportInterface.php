<?php
/**
 * @package
 * @subpackage
 * @author      Chance Garcia <chance@garcia.codes>
 * @copyright   (C)Copyright 2013-2018 Chance Garcia, chancegarcia.com
 *
 *    The MIT License (MIT)
 *
 * Copyright (c) 2013-2018 Chance Garcia
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

namespace Chance\DocumentAssembly\LegacySdk\Model;

interface DocumentAssemblyLegacyExportInterface
{
    const LEGACY_ENDPOINT = '/api/v1/interviewsession';

    /**
     * @return string
     */
    public function getProtocol();

    /**
     * @param string $domain
     */
    public function setDomain($domain);

    public function getInstanceName();

    public function setInstanceName($instanceDomain);

    public function getFqdn();

    public function getUri();

    public function getInstanceApiKey();

    public function setInstanceApiKey($instanceApiKey);

    public function getUserApiKey();

    public function setUserApiKey($userApiKey);

    /**
     * @return InterviewSessionDataInterface
     */
    public function getInterviewSessionData();

    /**
     * @param InterviewSessionDataInterface $data
     */
    public function setInterviewSessionData(InterviewSessionDataInterface $data);

    /**
     * returns POST or PUT based on presence of interview session id in request data
     *
     * @return string
     */
    public function getExportTransportMethod();

    public function export();
}
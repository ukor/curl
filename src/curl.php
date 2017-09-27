<?php
/**
 * @author Ukor Jidechi Ekundayo << http://ukorjidechi.com || ukorjidechi@gmail.com >>.
 * Date: 8/27/17, Time: 8:27 AM
 */

namespace ukorJidechi\curl_helper;

/**
 * Helper class for cURL
 */
class CURL
{

    const USER_AGENT = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.109 Safari/537.36";

    /**
     * @Method post()
     * @Description
     * @param $url
     * @param array $header
     * @param array $post_data
     * @return mixed
     */
    static function post($url, array $header = [], array $post_data = [])
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_USERAGENT, CURL::USER_AGENT);
        if(sizeof($header) > 0)
        {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        }

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }

    /**
     * @Method
     * @Description Post JSON to the given URL
     * @param $url
     * @param array $header
     * @param array $post_data
     * @return mixed
     */
    static function post_json($url, array $post_data, array $header = ['Content-Type: application/json'])
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_USERAGENT, CURL::USER_AGENT);
        if(sizeof($header) > 0)
        {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        }

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }

    /**
     * @Method
     * @Description
     * @param $url
     * @param array $header
     * @return mixed
     */
    static function get($url, array $header = [])
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_USERAGENT, CURL::USER_AGENT);
        if(sizeof($header) > 0)
        {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        }

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }

}
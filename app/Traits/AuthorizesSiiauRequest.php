<?php

namespace App\Traits;

trait AuthorizesSiiauRequest
{

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers){
        
        $accessToken = $this->resolveAccessToken();

        $headers['authorization'] = $accessToken;
    }


    public function resolveAccessToken(){
        return 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjFiOTIyZjUwOTFh
        NjI1ZGFjZmJlODVkOGMxMTE3YzY5NTkxOWI1NGI4YWNjYTQzNDRmY2Y3NDIxNWRkZTRmODQzMj
        cyZWE3NzcxYjk5ZDNjIn0.eyJhdWQiOiIyIiwianRpIjoiMWI5MjJmNTA5MWE2MjVkYWNmYmU4N
        WQ4YzExMTdjNjk1OTE5YjU0YjhhY2NhNDM0NGZjZjc0MjE1ZGRlNGY4NDMyNzJlYTc3NzFiOTlkM
        2MiLCJpYXQiOjE2MDUzMDEyMTAsIm5iZiI6MTYwNTMwMTIxMCwiZXhwIjoxNjM2ODM3MjEwLCJzd
        WIiOiIxNDc1Iiwic2NvcGVzIjpbInB1cmNoYXNlLXByb2R1Y3QiLCJtYW5hZ2UtcHJvZHVjdHMiL
        CJtYW5hZ2UtYWNjb3VudCIsInJlYWQtZ2VuZXJhbCJdfQ.mcKKQa-XTCvXhQUWvqHaEsRMECuHT2
        F93oumXyv7O9mwf9SBUM4ueGDI5exnlH2UYzoY2Ta1HMR4lwtV41vvPHImHKUycWN9IedeOVvf3r
        5Xkz1301_wuncYxJF4irA_pJB6d2tAHKJ0d85ioaM-pZRmeT7ctu6R6gY1GFGU5u-oVMmu1UxhTI
        niDfz2klHrJeUxS4kRf-wzV-Vq43RPaCA7C2ujvMG6JQXqlaBPLo6Bhj7jiC-wOf9u2m00FrXx1Y
        qf2BkWYJqTR6qmJkH1hOC4Y908fdiynAMWaZtDMorGmqOMJqFqNLSh-aiX3yaSg0ux7CK-P_8-q
        DmxgooLRHjxSZJ0kNuROi8PBT1IkOgrD2MmoE-dTtjpgZNAn2glhxULeH5BJwtB_SwHFJPs8U_wN
        7dTEzgkCYCJu0KBGI-pg__TBUQmgkvfzYx4bXUQL9HJWydtnu3-FsaOSmPDBuuyrP9KIRF0cVvTF-3
        Fctq6fh04JXUL77zOCXGLTn2Iw_N0RFRwDp9U6dBko7FSc7KLPdpFuSoE1cUcJkx9quhRmXiOcYgPj
        RgXHcT1f0wmBFK3bPy857AEmfDgArHpRlx2_TL7RIzDQJ3dbEiF-X1xGutMLNo_en_QsKisR838UPb
        Y3jitlF6wAZ8LzmSFTnEkcHAlddvRWWPml2cx5jA';
    }
       
    
}
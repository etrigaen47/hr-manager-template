<?php


class ImageProcessor
{

    public function PupilIProcessor($name, $type, $tmpname, $size, $pupil)
    {
        $pi_name = $name;
        $pi_nameArray = explode('.', $pi_name);
        $pi_filename = $pi_nameArray[0];
        $pi_fileExt = $pi_nameArray[1];
        $pi_mime = explode('/', $type);
        $pi_mimeType = $pi_mime[0];
        $pi_mimeExt = $pi_mime[1];
        $pi_tmpLocation = $tmpname;
        $pi_fileSize = $size;
        $allowed = array('png', 'jpg', 'jpeg', 'jfif');
        $pi_nameConst = ucwords($pupil);
        $pi_uploadName = $pi_nameConst.'_'.md5(microtime()) . '.' . strtolower($pi_fileExt);
        $pi_uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/bintalyaschool/design/images/profile/pupil/'.$pi_uploadName;
        $pi_dbPath = '/bintalyaschool/design/images/profile/pupil/'.$pi_uploadName;

        $allowed_format = $allowed[0] . ', ' .
            $allowed_format = $allowed[1] . ', ' .
                $allowed_format = $allowed[2] . ', ' .
                    $allowed_format = $allowed[3];

        if ($pi_mimeType != 'image')
        {
            return 'PROFILE_IMAGE_ERR';
        }
        if (!in_array($pi_fileExt, $allowed))
        {
            return 'PROFILE_IMAGE_FORMAT';
        }
        if ($pi_fileSize > 3000000) {
            return 'PROFILE_IMAGE_SIZE';
        }
        if ($pi_fileExt != $pi_mimeExt && ($pi_mimeExt == 'jpg' && $pi_fileExt != 'jpg')) {
            // OR ($mimeExt == 'jpg' && $fileExt != 'jpg') OR ($mimeExt == 'png' && $fileExt != 'png') OR ($mimeExt == 'gif' && $fileExt != 'gif')
            return 'PROFILE_IMAGE_EXTENSION';
        }

        move_uploaded_file($pi_tmpLocation, $pi_uploadPath);

        return $pi_dbPath;
        //end Logic Processing
    }

    public function FatherIProcessor($name, $type, $tmpname, $size, $father)
    {
        $fthI_name = $name;
        $fthI_nameArray = explode('.', $fthI_name);
        $fthI_filename = $fthI_nameArray[0];
        $fthI_fileExt = $fthI_nameArray[1];
        $fthI_mime = explode('/', $type);
        $fthI_mimeType = $fthI_mime[0];
        $fthI_mimeExt = $fthI_mime[1];
        $fthI_tmpLocation = $tmpname;
        $fthI_fileSize = $size;
        $allowed = array('png', 'jpg', 'jpeg', 'jfif');
        $fthI_nameConst = ucwords($father);
        $fthI_uploadName = $fthI_nameConst.'_'.md5(microtime()) . '.' . strtolower($fthI_fileExt);
        $fthI_uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/bintalyaschool/design/images/profile/father/'.$fthI_uploadName;
        $fthI_dbPath = '/bintalyaschool/design/images/profile/father/'.$fthI_uploadName;

        $allowed_format = $allowed[0] . ', ' .
            $allowed_format = $allowed[1] . ', ' .
                $allowed_format = $allowed[2] . ', ' .
                    $allowed_format = $allowed[3];

        if ($fthI_mimeType != 'image')
        {
            return 'F_PROFILE_IMAGE_ERR';
        }
        if (!in_array($fthI_fileExt, $allowed))
        {
            return 'F_PROFILE_IMAGE_FORMAT';
        }
        if ($fthI_fileSize > 3000000) {
            return 'F_PROFILE_IMAGE_SIZE';
        }
        if ($fthI_fileExt != $fthI_mimeExt && ($fthI_mimeExt == 'jpg' && $fthI_fileExt != 'jpg')) {
            // OR ($mimeExt == 'jpg' && $fileExt != 'jpg') OR ($mimeExt == 'png' && $fileExt != 'png') OR ($mimeExt == 'gif' && $fileExt != 'gif')
            return 'F_PROFILE_IMAGE_EXTENSION';
        }

        move_uploaded_file($fthI_tmpLocation, $fthI_uploadPath);

        return $fthI_dbPath;
        //end Logic Processing
    }

    public function MotherIProcessor($name, $type, $tmpname, $size, $mother)
    {
        $mthI_name = $name;
        $mthI_nameArray = explode('.', $mthI_name);
        $mthI_filename = $mthI_nameArray[0];
        $mthI_fileExt = $mthI_nameArray[1];
        $mthI_mime = explode('/', $type);
        $mthI_mimeType = $mthI_mime[0];
        $mthI_mimeExt = $mthI_mime[1];
        $mthI_tmpLocation = $tmpname;
        $mthI_fileSize = $size;
        $allowed = array('png', 'jpg', 'jpeg', 'jfif');
        $mthI_nameConst = ucwords($mother);
        $mthI_uploadName = $mthI_nameConst . '_' . md5(microtime()) . '.' . strtolower($mthI_fileExt);
        $mthI_uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/bintalyaschool/design/images/profile/mother/' . $mthI_uploadName;
        $mthI_dbPath = '/bintalyaschool/design/images/profile/mother/' . $mthI_uploadName;

        $allowed_format = $allowed[0] . ', ' .
            $allowed_format = $allowed[1] . ', ' .
                $allowed_format = $allowed[2] . ', ' .
                    $allowed_format = $allowed[3];

        if ($mthI_mimeType != 'image') {
            return 'M_PROFILE_IMAGE_ERR';
        }
        if (!in_array($mthI_fileExt, $allowed)) {
            return 'M_PROFILE_IMAGE_FORMAT';
        }
        if ($mthI_fileSize > 3000000) {
            return 'M_PROFILE_IMAGE_SIZE';
        }
        if ($mthI_fileExt != $mthI_mimeExt && ($mthI_mimeExt == 'jpg' && $mthI_fileExt != 'jpg')) {
            // OR ($mimeExt == 'jpg' && $fileExt != 'jpg') OR ($mimeExt == 'png' && $fileExt != 'png') OR ($mimeExt == 'gif' && $fileExt != 'gif')
            return 'M_PROFILE_IMAGE_EXTENSION';
        }

        move_uploaded_file($mthI_tmpLocation, $mthI_uploadPath);

        return $mthI_dbPath;
        //end Logic Processing
    }

    public function GuardianIProcessor($name, $type, $tmpname, $size, $guardian)
    {
        $grdnI_name = $name;
        $grdnI_nameArray = explode('.', $grdnI_name);
        $grdnI_filename = $grdnI_nameArray[0];
        $grdnI_fileExt = $grdnI_nameArray[1];
        $grdnI_mime = explode('/', $type);
        $grdnI_mimeType = $grdnI_mime[0];
        $grdnI_mimeExt = $grdnI_mime[1];
        $grdnI_tmpLocation = $tmpname;
        $grdnI_fileSize = $size;
        $allowed = array('png', 'jpg', 'jpeg', 'jfif');
        $grdnI_nameConst = ucwords($guardian);
        $grdnI_uploadName = $grdnI_nameConst . '_' . md5(microtime()) . '.' . strtolower($grdnI_fileExt);
        $grdnI_uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/bintalyaschool/design/images/profile/guardian/' . $grdnI_uploadName;
        $grdnI_dbPath = '/bintalyaschool/design/images/profile/guardian/' . $grdnI_uploadName;

        $allowed_format = $allowed[0] . ', ' .
            $allowed_format = $allowed[1] . ', ' .
                $allowed_format = $allowed[2] . ', ' .
                    $allowed_format = $allowed[3];

        if ($grdnI_mimeType != 'image') {
            return 'G_PROFILE_IMAGE_ERR';
        }
        if (!in_array($grdnI_fileExt, $allowed)) {
            return 'G_PROFILE_IMAGE_FORMAT';
        }
        if ($grdnI_fileSize > 3000000) {
            return 'G_PROFILE_IMAGE_SIZE';
        }
        if ($grdnI_fileExt != $grdnI_mimeExt && ($grdnI_mimeExt == 'jpg' && $grdnI_fileExt != 'jpg')) {
            // OR ($mimeExt == 'jpg' && $fileExt != 'jpg') OR ($mimeExt == 'png' && $fileExt != 'png') OR ($mimeExt == 'gif' && $fileExt != 'gif')
            return 'G_PROFILE_IMAGE_EXTENSION';
        }

        move_uploaded_file($grdnI_tmpLocation, $grdnI_uploadPath);

        return $grdnI_dbPath;
        //end Logic Processing
    }

    public function ArchivedImagesProcessor($name, $type, $tmpname, $size, $holderName)
    {
        $ai_name = $name;
        $ai_nameArray = explode('.', $ai_name);
        $ai_filename = $ai_nameArray[0];
        $ai_fileExt = $ai_nameArray[1];
        $ai_mime = explode('/', $type);
        $ai_mimeType = $ai_mime[0];
        $ai_mimeExt = $ai_mime[1];
        $ai_tmpLocation = $tmpname;
        $ai_fileSize = $size;
        $allowed = array('png', 'jpg', 'jpeg', 'jfif');
        $ai_nameConst = ucwords($holderName);
        $ai_uploadName = $ai_nameConst.'_'.md5(microtime()) . '.' . strtolower($ai_fileExt);
        $ai_uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/bintalyaschool/design/images/profile/archive/'.$ai_uploadName;
        $ai_dbPath = '/bintalyaschool/design/images/profile/archive/'.$ai_uploadName;

        $allowed_format = $allowed[0] . ', ' .
            $allowed_format = $allowed[1] . ', ' .
                $allowed_format = $allowed[2] . ', ' .
                    $allowed_format = $allowed[3];

        if ($ai_mimeType != 'image')
        {
            return 'PROFILE_IMAGE_ERR';
        }
        if (!in_array($ai_fileExt, $allowed))
        {
            return 'PROFILE_IMAGE_FORMAT';
        }
        if ($ai_fileSize > 3000000) {
            return 'PROFILE_IMAGE_SIZE';
        }
        if ($ai_fileExt != $ai_mimeExt && ($ai_mimeExt == 'jpg' && $ai_fileExt != 'jpg')) {
            return 'PROFILE_IMAGE_EXTENSION';
        }

        move_uploaded_file($ai_tmpLocation, $ai_uploadPath);

        return 'SUCCESS';
        //end Logic Processing
    }
}
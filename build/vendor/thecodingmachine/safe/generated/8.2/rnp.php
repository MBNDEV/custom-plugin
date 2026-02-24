<?php

namespace _PhpScoperdd275a4cd119\Safe;

use _PhpScoperdd275a4cd119\Safe\Exceptions\RnpException;
/**
 * @param \RnpFFI $ffi
 * @param string $input
 * @return string
 * @throws RnpException
 *
 */
function rnp_decrypt(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $input): string
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_decrypt($ffi, $input);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param string $input
 * @param int $flags
 * @return string
 * @throws RnpException
 *
 */
function rnp_dump_packets_to_json(string $input, int $flags): string
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_dump_packets_to_json($input, $flags);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param string $input
 * @param int $flags
 * @return string
 * @throws RnpException
 *
 */
function rnp_dump_packets(string $input, int $flags): string
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_dump_packets($input, $flags);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param string $pub_format
 * @param string $sec_format
 * @return \RnpFFI
 * @throws RnpException
 *
 */
function rnp_ffi_create(string $pub_format, string $sec_format): \_PhpScoperdd275a4cd119\RnpFFI
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_ffi_create($pub_format, $sec_format);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param callable $password_callback
 * @throws RnpException
 *
 */
function rnp_ffi_set_pass_provider(\_PhpScoperdd275a4cd119\RnpFFI $ffi, callable $password_callback): void
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_ffi_set_pass_provider($ffi, $password_callback);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
}
/**
 * @param \RnpFFI $ffi
 * @param string $input
 * @param int $flags
 * @return string
 * @throws RnpException
 *
 */
function rnp_import_keys(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $input, int $flags): string
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_import_keys($ffi, $input, $flags);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $input
 * @param int $flags
 * @return string
 * @throws RnpException
 *
 */
function rnp_import_signatures(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $input, int $flags): string
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_import_signatures($ffi, $input, $flags);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $key_fp
 * @param string $subkey_fp
 * @param string $uid
 * @param int $flags
 * @return string
 * @throws RnpException
 *
 */
function rnp_key_export_autocrypt(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $key_fp, string $subkey_fp, string $uid, int $flags): string
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_key_export_autocrypt($ffi, $key_fp, $subkey_fp, $uid, $flags);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $key_fp
 * @param int $flags
 * @param array $options
 * @return string
 * @throws RnpException
 *
 */
function rnp_key_export_revocation(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $key_fp, int $flags, ?array $options = null): string
{
    error_clear_last();
    if ($options !== null) {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_key_export_revocation($ffi, $key_fp, $flags, $options);
    } else {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_key_export_revocation($ffi, $key_fp, $flags);
    }
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $key_fp
 * @param int $flags
 * @return string
 * @throws RnpException
 *
 */
function rnp_key_export(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $key_fp, int $flags): string
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_key_export($ffi, $key_fp, $flags);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $key_fp
 * @return array
 * @throws RnpException
 *
 */
function rnp_key_get_info(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $key_fp): array
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_key_get_info($ffi, $key_fp);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $key_fp
 * @param int $flags
 * @throws RnpException
 *
 */
function rnp_key_remove(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $key_fp, int $flags): void
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_key_remove($ffi, $key_fp, $flags);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
}
/**
 * @param \RnpFFI $ffi
 * @param string $key_fp
 * @param int $flags
 * @param array $options
 * @throws RnpException
 *
 */
function rnp_key_revoke(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $key_fp, int $flags, ?array $options = null): void
{
    error_clear_last();
    if ($options !== null) {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_key_revoke($ffi, $key_fp, $flags, $options);
    } else {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_key_revoke($ffi, $key_fp, $flags);
    }
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
}
/**
 * @param \RnpFFI $ffi
 * @param string $identifier_type
 * @return array
 * @throws RnpException
 *
 */
function rnp_list_keys(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $identifier_type): array
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_list_keys($ffi, $identifier_type);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $format
 * @param string $input_path
 * @param int $flags
 * @throws RnpException
 *
 */
function rnp_load_keys_from_path(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $format, string $input_path, int $flags): void
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_load_keys_from_path($ffi, $format, $input_path, $flags);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
}
/**
 * @param \RnpFFI $ffi
 * @param string $format
 * @param string $input
 * @param int $flags
 * @throws RnpException
 *
 */
function rnp_load_keys(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $format, string $input, int $flags): void
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_load_keys($ffi, $format, $input, $flags);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
}
/**
 * @param \RnpFFI $ffi
 * @param string $identifier_type
 * @param string $identifier
 * @return string
 * @throws RnpException
 *
 */
function rnp_locate_key(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $identifier_type, string $identifier): string
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_locate_key($ffi, $identifier_type, $identifier);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $message
 * @param array $recipient_keys_fp
 * @param array $options
 * @return string
 * @throws RnpException
 *
 */
function rnp_op_encrypt(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $message, array $recipient_keys_fp, ?array $options = null): string
{
    error_clear_last();
    if ($options !== null) {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_op_encrypt($ffi, $message, $recipient_keys_fp, $options);
    } else {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_op_encrypt($ffi, $message, $recipient_keys_fp);
    }
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $userid
 * @param string $key_alg
 * @param string $sub_alg
 * @param array $options
 * @return string
 * @throws RnpException
 *
 */
function rnp_op_generate_key(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $userid, string $key_alg, ?string $sub_alg = null, ?array $options = null): string
{
    error_clear_last();
    if ($options !== null) {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_op_generate_key($ffi, $userid, $key_alg, $sub_alg, $options);
    } elseif ($sub_alg !== null) {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_op_generate_key($ffi, $userid, $key_alg, $sub_alg);
    } else {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_op_generate_key($ffi, $userid, $key_alg);
    }
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $data
 * @param array $keys_fp
 * @param array $options
 * @return string
 * @throws RnpException
 *
 */
function rnp_op_sign_cleartext(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $data, array $keys_fp, ?array $options = null): string
{
    error_clear_last();
    if ($options !== null) {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_op_sign_cleartext($ffi, $data, $keys_fp, $options);
    } else {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_op_sign_cleartext($ffi, $data, $keys_fp);
    }
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $data
 * @param array $keys_fp
 * @param array $options
 * @return string
 * @throws RnpException
 *
 */
function rnp_op_sign_detached(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $data, array $keys_fp, ?array $options = null): string
{
    error_clear_last();
    if ($options !== null) {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_op_sign_detached($ffi, $data, $keys_fp, $options);
    } else {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_op_sign_detached($ffi, $data, $keys_fp);
    }
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $data
 * @param array $keys_fp
 * @param array $options
 * @return string
 * @throws RnpException
 *
 */
function rnp_op_sign(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $data, array $keys_fp, ?array $options = null): string
{
    error_clear_last();
    if ($options !== null) {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_op_sign($ffi, $data, $keys_fp, $options);
    } else {
        $safeResult = \_PhpScoperdd275a4cd119\rnp_op_sign($ffi, $data, $keys_fp);
    }
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $data
 * @param string $signature
 * @return array
 * @throws RnpException
 *
 */
function rnp_op_verify_detached(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $data, string $signature): array
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_op_verify_detached($ffi, $data, $signature);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $data
 * @return array
 * @throws RnpException
 *
 */
function rnp_op_verify(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $data): array
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_op_verify($ffi, $data);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}
/**
 * @param \RnpFFI $ffi
 * @param string $format
 * @param string $output_path
 * @param int $flags
 * @throws RnpException
 *
 */
function rnp_save_keys_to_path(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $format, string $output_path, int $flags): void
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_save_keys_to_path($ffi, $format, $output_path, $flags);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
}
/**
 * @param \RnpFFI $ffi
 * @param string $format
 * @param string $output
 * @param int $flags
 * @throws RnpException
 *
 */
function rnp_save_keys(\_PhpScoperdd275a4cd119\RnpFFI $ffi, string $format, string &$output, int $flags): void
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_save_keys($ffi, $format, $output, $flags);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
}
/**
 * @param string $type
 * @return string
 * @throws RnpException
 *
 */
function rnp_supported_features(string $type): string
{
    error_clear_last();
    $safeResult = \_PhpScoperdd275a4cd119\rnp_supported_features($type);
    if ($safeResult === \false) {
        throw RnpException::createFromPhpError();
    }
    return $safeResult;
}

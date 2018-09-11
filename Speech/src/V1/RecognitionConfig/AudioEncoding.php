<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace Google\Cloud\Speech\V1\RecognitionConfig;

/**
 * The encoding of the audio data sent in the request.
 * All encodings support only 1 channel (mono) audio.
 * For best results, the audio source should be captured and transmitted using
 * a lossless encoding (`FLAC` or `LINEAR16`). The accuracy of the speech
 * recognition can be reduced if lossy codecs are used to capture or transmit
 * audio, particularly if background noise is present. Lossy codecs include
 * `MULAW`, `AMR`, `AMR_WB`, `OGG_OPUS`, and `SPEEX_WITH_HEADER_BYTE`.
 * The `FLAC` and `WAV` audio file formats include a header that describes the
 * included audio content. You can request recognition for `WAV` files that
 * contain either `LINEAR16` or `MULAW` encoded audio.
 * If you send `FLAC` or `WAV` audio file format in
 * your request, you do not need to specify an `AudioEncoding`; the audio
 * encoding format is determined from the file header. If you specify
 * an `AudioEncoding` when you send  send `FLAC` or `WAV` audio, the
 * encoding configuration must match the encoding described in the audio
 * header; otherwise the request returns an
 * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT] error code.
 *
 * Protobuf type <code>google.cloud.speech.v1.RecognitionConfig.AudioEncoding</code>
 */
class AudioEncoding
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>ENCODING_UNSPECIFIED = 0;</code>
     */
    const ENCODING_UNSPECIFIED = 0;
    /**
     * Uncompressed 16-bit signed little-endian samples (Linear PCM).
     *
     * Generated from protobuf enum <code>LINEAR16 = 1;</code>
     */
    const LINEAR16 = 1;
    /**
     * `FLAC` (Free Lossless Audio
     * Codec) is the recommended encoding because it is
     * lossless--therefore recognition is not compromised--and
     * requires only about half the bandwidth of `LINEAR16`. `FLAC` stream
     * encoding supports 16-bit and 24-bit samples, however, not all fields in
     * `STREAMINFO` are supported.
     *
     * Generated from protobuf enum <code>FLAC = 2;</code>
     */
    const FLAC = 2;
    /**
     * 8-bit samples that compand 14-bit audio samples using G.711 PCMU/mu-law.
     *
     * Generated from protobuf enum <code>MULAW = 3;</code>
     */
    const MULAW = 3;
    /**
     * Adaptive Multi-Rate Narrowband codec. `sample_rate_hertz` must be 8000.
     *
     * Generated from protobuf enum <code>AMR = 4;</code>
     */
    const AMR = 4;
    /**
     * Adaptive Multi-Rate Wideband codec. `sample_rate_hertz` must be 16000.
     *
     * Generated from protobuf enum <code>AMR_WB = 5;</code>
     */
    const AMR_WB = 5;
    /**
     * Opus encoded audio frames in Ogg container
     * ([OggOpus](https://wiki.xiph.org/OggOpus)).
     * `sample_rate_hertz` must be one of 8000, 12000, 16000, 24000, or 48000.
     *
     * Generated from protobuf enum <code>OGG_OPUS = 6;</code>
     */
    const OGG_OPUS = 6;
    /**
     * Although the use of lossy encodings is not recommended, if a very low
     * bitrate encoding is required, `OGG_OPUS` is highly preferred over
     * Speex encoding. The [Speex](https://speex.org/)  encoding supported by
     * Cloud Speech API has a header byte in each block, as in MIME type
     * `audio/x-speex-with-header-byte`.
     * It is a variant of the RTP Speex encoding defined in
     * [RFC 5574](https://tools.ietf.org/html/rfc5574).
     * The stream is a sequence of blocks, one block per RTP packet. Each block
     * starts with a byte containing the length of the block, in bytes, followed
     * by one or more frames of Speex data, padded to an integral number of
     * bytes (octets) as specified in RFC 5574. In other words, each RTP header
     * is replaced with a single byte containing the block length. Only Speex
     * wideband is supported. `sample_rate_hertz` must be 16000.
     *
     * Generated from protobuf enum <code>SPEEX_WITH_HEADER_BYTE = 7;</code>
     */
    const SPEEX_WITH_HEADER_BYTE = 7;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AudioEncoding::class, \Google\Cloud\Speech\V1\RecognitionConfig_AudioEncoding::class);


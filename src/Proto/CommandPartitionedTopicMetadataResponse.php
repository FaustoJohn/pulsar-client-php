<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.CommandPartitionedTopicMetadataResponse
 */
class CommandPartitionedTopicMetadataResponse extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * partitions optional uint32 = 1
     *
     * @var int
     */
    protected $partitions = null;

    /**
     * request_id required uint64 = 2
     *
     * @var int
     */
    protected $request_id = null;

    /**
     * response optional enum = 3
     *
     * @var \Pulsar\Proto\CommandPartitionedTopicMetadataResponse\LookupType
     */
    protected $response = null;

    /**
     * error optional enum = 4
     *
     * @var \Pulsar\Proto\ServerError
     */
    protected $error = null;

    /**
     * message optional string = 5
     *
     * @var string
     */
    protected $message = null;

    /**
     * Check if 'partitions' has a value
     *
     * @return bool
     */
    public function hasPartitions()
    {
        return $this->partitions !== null;
    }

    /**
     * Get 'partitions' value
     *
     * @return int
     */
    public function getPartitions()
    {
        return $this->partitions;
    }

    /**
     * Set 'partitions' value
     *
     * @param int $value
     */
    public function setPartitions($value = null)
    {
        $this->partitions = $value;
    }

    /**
     * Check if 'request_id' has a value
     *
     * @return bool
     */
    public function hasRequestId()
    {
        return $this->request_id !== null;
    }

    /**
     * Get 'request_id' value
     *
     * @return int
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Set 'request_id' value
     *
     * @param int $value
     */
    public function setRequestId($value)
    {
        $this->request_id = $value;
    }

    /**
     * Check if 'response' has a value
     *
     * @return bool
     */
    public function hasResponse()
    {
        return $this->response !== null;
    }

    /**
     * Get 'response' value
     *
     * @return \Pulsar\Proto\CommandPartitionedTopicMetadataResponse\LookupType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set 'response' value
     *
     * @param \Pulsar\Proto\CommandPartitionedTopicMetadataResponse\LookupType $value
     */
    public function setResponse(\Pulsar\Proto\CommandPartitionedTopicMetadataResponse\LookupType $value = null)
    {
        $this->response = $value;
    }

    /**
     * Check if 'error' has a value
     *
     * @return bool
     */
    public function hasError()
    {
        return $this->error !== null;
    }

    /**
     * Get 'error' value
     *
     * @return \Pulsar\Proto\ServerError
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set 'error' value
     *
     * @param \Pulsar\Proto\ServerError $value
     */
    public function setError(\Pulsar\Proto\ServerError $value = null)
    {
        $this->error = $value;
    }

    /**
     * Check if 'message' has a value
     *
     * @return bool
     */
    public function hasMessage()
    {
        return $this->message !== null;
    }

    /**
     * Get 'message' value
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set 'message' value
     *
     * @param string $value
     */
    public function setMessage($value = null)
    {
        $this->message = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ($this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        if (!isset($values['request_id'])) {
            throw new \InvalidArgumentException('Field "request_id" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values = array_merge([
            'partitions' => null,
            'response'   => null,
            'error'      => null,
            'message'    => null,
        ], $values);

        $message->setPartitions($values['partitions']);
        $message->setRequestId($values['request_id']);
        $message->setResponse($values['response']);
        $message->setError($values['error']);
        $message->setMessage($values['message']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'CommandPartitionedTopicMetadataResponse',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'partitions',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name'   => 'request_id',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'    => 3,
                    'name'      => 'response',
                    'type'      => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label'     => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.pulsar.proto.CommandPartitionedTopicMetadataResponse.LookupType',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'    => 4,
                    'name'      => 'error',
                    'type'      => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label'     => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.pulsar.proto.ServerError',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name'   => 'message',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream = $context->getStream();
        $writer = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->request_id === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandPartitionedTopicMetadataResponse#request_id" (tag 2) is required but has no value.');
        }

        if ($this->partitions !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->partitions);
        }

        if ($this->request_id !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->request_id);
        }

        if ($this->response !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->response->value());
        }

        if ($this->error !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->error->value());
        }

        if ($this->message !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->message);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ( $length !== null )
            ? ( $stream->tell() + $length )
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->partitions = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->request_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->response = \Pulsar\Proto\CommandPartitionedTopicMetadataResponse\LookupType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->error = \Pulsar\Proto\ServerError::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->message = $reader->readString($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size = 0;

        if ($this->partitions !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->partitions);
        }

        if ($this->request_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->request_id);
        }

        if ($this->response !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->response->value());
        }

        if ($this->error !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->error->value());
        }

        if ($this->message !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->message);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->partitions = null;
        $this->request_id = null;
        $this->response = null;
        $this->error = null;
        $this->message = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\CommandPartitionedTopicMetadataResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->partitions = ( $message->partitions !== null ) ? $message->partitions : $this->partitions;
        $this->request_id = ( $message->request_id !== null ) ? $message->request_id : $this->request_id;
        $this->response = ( $message->response !== null ) ? $message->response : $this->response;
        $this->error = ( $message->error !== null ) ? $message->error : $this->error;
        $this->message = ( $message->message !== null ) ? $message->message : $this->message;
    }


}


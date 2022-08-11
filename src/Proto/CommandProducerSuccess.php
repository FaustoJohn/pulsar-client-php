<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.CommandProducerSuccess
 */
class CommandProducerSuccess extends \Protobuf\AbstractMessage
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
     * request_id required uint64 = 1
     *
     * @var int
     */
    protected $request_id = null;

    /**
     * producer_name required string = 2
     *
     * @var string
     */
    protected $producer_name = null;

    /**
     * last_sequence_id optional int64 = 3
     *
     * @var int
     */
    protected $last_sequence_id = null;

    /**
     * schema_version optional bytes = 4
     *
     * @var \Protobuf\Stream
     */
    protected $schema_version = null;

    /**
     * topic_epoch optional uint64 = 5
     *
     * @var int
     */
    protected $topic_epoch = null;

    /**
     * producer_ready optional bool = 6
     *
     * @var bool
     */
    protected $producer_ready = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->last_sequence_id = '-1';
        $this->producer_ready = true;

        parent::__construct($stream, $configuration);
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
     * Check if 'producer_name' has a value
     *
     * @return bool
     */
    public function hasProducerName()
    {
        return $this->producer_name !== null;
    }

    /**
     * Get 'producer_name' value
     *
     * @return string
     */
    public function getProducerName()
    {
        return $this->producer_name;
    }

    /**
     * Set 'producer_name' value
     *
     * @param string $value
     */
    public function setProducerName($value)
    {
        $this->producer_name = $value;
    }

    /**
     * Check if 'last_sequence_id' has a value
     *
     * @return bool
     */
    public function hasLastSequenceId()
    {
        return $this->last_sequence_id !== null;
    }

    /**
     * Get 'last_sequence_id' value
     *
     * @return int
     */
    public function getLastSequenceId()
    {
        return $this->last_sequence_id;
    }

    /**
     * Set 'last_sequence_id' value
     *
     * @param int $value
     */
    public function setLastSequenceId($value = null)
    {
        $this->last_sequence_id = $value;
    }

    /**
     * Check if 'schema_version' has a value
     *
     * @return bool
     */
    public function hasSchemaVersion()
    {
        return $this->schema_version !== null;
    }

    /**
     * Get 'schema_version' value
     *
     * @return \Protobuf\Stream
     */
    public function getSchemaVersion()
    {
        return $this->schema_version;
    }

    /**
     * Set 'schema_version' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setSchemaVersion($value = null)
    {
        if ($value !== null && !$value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->schema_version = $value;
    }

    /**
     * Check if 'topic_epoch' has a value
     *
     * @return bool
     */
    public function hasTopicEpoch()
    {
        return $this->topic_epoch !== null;
    }

    /**
     * Get 'topic_epoch' value
     *
     * @return int
     */
    public function getTopicEpoch()
    {
        return $this->topic_epoch;
    }

    /**
     * Set 'topic_epoch' value
     *
     * @param int $value
     */
    public function setTopicEpoch($value = null)
    {
        $this->topic_epoch = $value;
    }

    /**
     * Check if 'producer_ready' has a value
     *
     * @return bool
     */
    public function hasProducerReady()
    {
        return $this->producer_ready !== null;
    }

    /**
     * Get 'producer_ready' value
     *
     * @return bool
     */
    public function getProducerReady()
    {
        return $this->producer_ready;
    }

    /**
     * Set 'producer_ready' value
     *
     * @param bool $value
     */
    public function setProducerReady($value = null)
    {
        $this->producer_ready = $value;
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
            throw new \InvalidArgumentException('Field "request_id" (tag 1) is required but has no value.');
        }

        if (!isset($values['producer_name'])) {
            throw new \InvalidArgumentException('Field "producer_name" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values = array_merge([
            'last_sequence_id' => '-1',
            'schema_version'   => null,
            'topic_epoch'      => null,
            'producer_ready'   => true,
        ], $values);

        $message->setRequestId($values['request_id']);
        $message->setProducerName($values['producer_name']);
        $message->setLastSequenceId($values['last_sequence_id']);
        $message->setSchemaVersion($values['schema_version']);
        $message->setTopicEpoch($values['topic_epoch']);
        $message->setProducerReady($values['producer_ready']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'CommandProducerSuccess',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'request_id',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name'   => 'producer_name',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'        => 3,
                    'name'          => 'last_sequence_id',
                    'type'          => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label'         => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '-1',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name'   => 'schema_version',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name'   => 'topic_epoch',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'        => 6,
                    'name'          => 'producer_ready',
                    'type'          => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label'         => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => true,
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
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandProducerSuccess#request_id" (tag 1) is required but has no value.');
        }

        if ($this->producer_name === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandProducerSuccess#producer_name" (tag 2) is required but has no value.');
        }

        if ($this->request_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->request_id);
        }

        if ($this->producer_name !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->producer_name);
        }

        if ($this->last_sequence_id !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->last_sequence_id);
        }

        if ($this->schema_version !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeByteStream($stream, $this->schema_version);
        }

        if ($this->topic_epoch !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->topic_epoch);
        }

        if ($this->producer_ready !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->producer_ready);
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
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->request_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->producer_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->last_sequence_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->schema_version = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->topic_epoch = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->producer_ready = $reader->readBool($stream);

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

        if ($this->request_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->request_id);
        }

        if ($this->producer_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->producer_name);
        }

        if ($this->last_sequence_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->last_sequence_id);
        }

        if ($this->schema_version !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->schema_version);
        }

        if ($this->topic_epoch !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->topic_epoch);
        }

        if ($this->producer_ready !== null) {
            $size += 1;
            $size += 1;
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
        $this->request_id = null;
        $this->producer_name = null;
        $this->last_sequence_id = '-1';
        $this->schema_version = null;
        $this->topic_epoch = null;
        $this->producer_ready = true;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\CommandProducerSuccess) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->request_id = ( $message->request_id !== null ) ? $message->request_id : $this->request_id;
        $this->producer_name = ( $message->producer_name !== null ) ? $message->producer_name : $this->producer_name;
        $this->last_sequence_id = ( $message->last_sequence_id !== null ) ? $message->last_sequence_id : $this->last_sequence_id;
        $this->schema_version = ( $message->schema_version !== null ) ? $message->schema_version : $this->schema_version;
        $this->topic_epoch = ( $message->topic_epoch !== null ) ? $message->topic_epoch : $this->topic_epoch;
        $this->producer_ready = ( $message->producer_ready !== null ) ? $message->producer_ready : $this->producer_ready;
    }


}


<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.CommandActiveConsumerChange
 */
class CommandActiveConsumerChange extends \Protobuf\AbstractMessage
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
     * consumer_id required uint64 = 1
     *
     * @var int
     */
    protected $consumer_id = null;

    /**
     * is_active optional bool = 2
     *
     * @var bool
     */
    protected $is_active = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->is_active = false;

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'consumer_id' has a value
     *
     * @return bool
     */
    public function hasConsumerId()
    {
        return $this->consumer_id !== null;
    }

    /**
     * Get 'consumer_id' value
     *
     * @return int
     */
    public function getConsumerId()
    {
        return $this->consumer_id;
    }

    /**
     * Set 'consumer_id' value
     *
     * @param int $value
     */
    public function setConsumerId($value)
    {
        $this->consumer_id = $value;
    }

    /**
     * Check if 'is_active' has a value
     *
     * @return bool
     */
    public function hasIsActive()
    {
        return $this->is_active !== null;
    }

    /**
     * Get 'is_active' value
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set 'is_active' value
     *
     * @param bool $value
     */
    public function setIsActive($value = null)
    {
        $this->is_active = $value;
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
        if (!isset($values['consumer_id'])) {
            throw new \InvalidArgumentException('Field "consumer_id" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values = array_merge([
            'is_active' => false,
        ], $values);

        $message->setConsumerId($values['consumer_id']);
        $message->setIsActive($values['is_active']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'CommandActiveConsumerChange',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'consumer_id',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'        => 2,
                    'name'          => 'is_active',
                    'type'          => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label'         => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false,
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

        if ($this->consumer_id === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\CommandActiveConsumerChange#consumer_id" (tag 1) is required but has no value.');
        }

        if ($this->consumer_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->consumer_id);
        }

        if ($this->is_active !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->is_active);
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

                $this->consumer_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_active = $reader->readBool($stream);

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

        if ($this->consumer_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->consumer_id);
        }

        if ($this->is_active !== null) {
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
        $this->consumer_id = null;
        $this->is_active = false;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\CommandActiveConsumerChange) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->consumer_id = ( $message->consumer_id !== null ) ? $message->consumer_id : $this->consumer_id;
        $this->is_active = ( $message->is_active !== null ) ? $message->is_active : $this->is_active;
    }


}


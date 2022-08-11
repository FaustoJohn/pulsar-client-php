<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.BrokerEntryMetadata
 */
class BrokerEntryMetadata extends \Protobuf\AbstractMessage
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
     * broker_timestamp optional uint64 = 1
     *
     * @var int
     */
    protected $broker_timestamp = null;

    /**
     * index optional uint64 = 2
     *
     * @var int
     */
    protected $index = null;

    /**
     * Check if 'broker_timestamp' has a value
     *
     * @return bool
     */
    public function hasBrokerTimestamp()
    {
        return $this->broker_timestamp !== null;
    }

    /**
     * Get 'broker_timestamp' value
     *
     * @return int
     */
    public function getBrokerTimestamp()
    {
        return $this->broker_timestamp;
    }

    /**
     * Set 'broker_timestamp' value
     *
     * @param int $value
     */
    public function setBrokerTimestamp($value = null)
    {
        $this->broker_timestamp = $value;
    }

    /**
     * Check if 'index' has a value
     *
     * @return bool
     */
    public function hasIndex()
    {
        return $this->index !== null;
    }

    /**
     * Get 'index' value
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Set 'index' value
     *
     * @param int $value
     */
    public function setIndex($value = null)
    {
        $this->index = $value;
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
        $message = new self();
        $values = array_merge([
            'broker_timestamp' => null,
            'index'            => null,
        ], $values);

        $message->setBrokerTimestamp($values['broker_timestamp']);
        $message->setIndex($values['index']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'BrokerEntryMetadata',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'broker_timestamp',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name'   => 'index',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
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

        if ($this->broker_timestamp !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->broker_timestamp);
        }

        if ($this->index !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->index);
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

                $this->broker_timestamp = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->index = $reader->readVarint($stream);

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

        if ($this->broker_timestamp !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->broker_timestamp);
        }

        if ($this->index !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->index);
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
        $this->broker_timestamp = null;
        $this->index = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\BrokerEntryMetadata) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->broker_timestamp = ( $message->broker_timestamp !== null ) ? $message->broker_timestamp : $this->broker_timestamp;
        $this->index = ( $message->index !== null ) ? $message->index : $this->index;
    }


}


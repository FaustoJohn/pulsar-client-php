<?php
/**
 * Generated by Protobuf protoc plugin.
 * File descriptor : PulsarApi.proto
 */


namespace Pulsar\Proto;

/**
 * Protobuf message : pulsar.proto.Schema
 */
class Schema extends \Protobuf\AbstractMessage
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
     * name required string = 1
     *
     * @var string
     */
    protected $name = null;

    /**
     * schema_data required bytes = 3
     *
     * @var \Protobuf\Stream
     */
    protected $schema_data = null;

    /**
     * type required enum = 4
     *
     * @var \Pulsar\Proto\Schema\Type
     */
    protected $type = null;

    /**
     * properties repeated message = 5
     *
     * @var \Protobuf\Collection<\Pulsar\Proto\KeyValue>
     */
    protected $properties = null;

    /**
     * Check if 'name' has a value
     *
     * @return bool
     */
    public function hasName()
    {
        return $this->name !== null;
    }

    /**
     * Get 'name' value
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set 'name' value
     *
     * @param string $value
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * Check if 'schema_data' has a value
     *
     * @return bool
     */
    public function hasSchemaData()
    {
        return $this->schema_data !== null;
    }

    /**
     * Get 'schema_data' value
     *
     * @return \Protobuf\Stream
     */
    public function getSchemaData()
    {
        return $this->schema_data;
    }

    /**
     * Set 'schema_data' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setSchemaData($value)
    {
        if ($value !== null && !$value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->schema_data = $value;
    }

    /**
     * Check if 'type' has a value
     *
     * @return bool
     */
    public function hasType()
    {
        return $this->type !== null;
    }

    /**
     * Get 'type' value
     *
     * @return \Pulsar\Proto\Schema\Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set 'type' value
     *
     * @param \Pulsar\Proto\Schema\Type $value
     */
    public function setType(\Pulsar\Proto\Schema\Type $value)
    {
        $this->type = $value;
    }

    /**
     * Check if 'properties' has a value
     *
     * @return bool
     */
    public function hasPropertiesList()
    {
        return $this->properties !== null;
    }

    /**
     * Get 'properties' value
     *
     * @return \Protobuf\Collection<\Pulsar\Proto\KeyValue>
     */
    public function getPropertiesList()
    {
        return $this->properties;
    }

    /**
     * Set 'properties' value
     *
     * @param \Protobuf\Collection<\Pulsar\Proto\KeyValue> $value
     */
    public function setPropertiesList(\Protobuf\Collection $value = null)
    {
        $this->properties = $value;
    }

    /**
     * Add a new element to 'properties'
     *
     * @param \Pulsar\Proto\KeyValue $value
     */
    public function addProperties(\Pulsar\Proto\KeyValue $value)
    {
        if ($this->properties === null) {
            $this->properties = new \Protobuf\MessageCollection();
        }

        $this->properties->add($value);
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
        if (!isset($values['name'])) {
            throw new \InvalidArgumentException('Field "name" (tag 1) is required but has no value.');
        }

        if (!isset($values['schema_data'])) {
            throw new \InvalidArgumentException('Field "schema_data" (tag 3) is required but has no value.');
        }

        if (!isset($values['type'])) {
            throw new \InvalidArgumentException('Field "type" (tag 4) is required but has no value.');
        }

        $message = new self();
        $values = array_merge([
            'properties' => [],
        ], $values);

        $message->setName($values['name']);
        $message->setSchemaData($values['schema_data']);
        $message->setType($values['type']);

        foreach ($values['properties'] as $item) {
            $message->addProperties($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'  => 'Schema',
            'field' => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name'   => 'name',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name'   => 'schema_data',
                    'type'   => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label'  => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'    => 4,
                    'name'      => 'type',
                    'type'      => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label'     => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.pulsar.proto.Schema.Type',
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number'    => 5,
                    'name'      => 'properties',
                    'type'      => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label'     => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.pulsar.proto.KeyValue',
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

        if ($this->name === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\Schema#name" (tag 1) is required but has no value.');
        }

        if ($this->schema_data === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\Schema#schema_data" (tag 3) is required but has no value.');
        }

        if ($this->type === null) {
            throw new \UnexpectedValueException('Field "\\pulsar\\proto\\Schema#type" (tag 4) is required but has no value.');
        }

        if ($this->name !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->name);
        }

        if ($this->schema_data !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeByteStream($stream, $this->schema_data);
        }

        if ($this->type !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->type->value());
        }

        if ($this->properties !== null) {
            foreach ($this->properties as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->name = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->schema_data = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->type = \Pulsar\Proto\Schema\Type::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize = $reader->readVarint($stream);
                $innerMessage = new \Pulsar\Proto\KeyValue();

                if ($this->properties === null) {
                    $this->properties = new \Protobuf\MessageCollection();
                }

                $this->properties->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->name);
        }

        if ($this->schema_data !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->schema_data);
        }

        if ($this->type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->type->value());
        }

        if ($this->properties !== null) {
            foreach ($this->properties as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->name = null;
        $this->schema_data = null;
        $this->type = null;
        $this->properties = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if (!$message instanceof \Pulsar\Proto\Schema) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->name = ( $message->name !== null ) ? $message->name : $this->name;
        $this->schema_data = ( $message->schema_data !== null ) ? $message->schema_data : $this->schema_data;
        $this->type = ( $message->type !== null ) ? $message->type : $this->type;
        $this->properties = ( $message->properties !== null ) ? $message->properties : $this->properties;
    }


}


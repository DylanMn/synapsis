<?php

namespace AppBundle\Form;

use AppBundle\Entity\Keyword;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;

class KeywordType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder->add('keyword', TextType::class);

        /*$builder->get('keyword')
            ->addModelTransformer(new CallbackTransformer(
                function ($keywordAsArray) {
                    // transform the array to a string
                    $keywordAsArray = array('longueur', 'largeur', 'hauteur','poidsNu','poidsEmballe');
                    return implode(', ', $keywordAsArray);
                },
                function ($keywordAsString) {
                    // transform the string back to an array
                    // = "longueur, largeur, hauteur, poidsNu, poidsEmballe";
                    return explode(', ', $keywordAsString);
                }
            ))
        ;*/

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Keyword::class));

    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_project';
    }


}

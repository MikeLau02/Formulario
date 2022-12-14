PGDMP         1                z            dbformulario    15.1    15.1     ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            ?           1262    16398    dbformulario    DATABASE     ?   CREATE DATABASE dbformulario WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Colombia.1252';
    DROP DATABASE dbformulario;
                postgres    false            ?            1259    16420    usuario    TABLE     ?  CREATE TABLE public.usuario (
    idusuario integer NOT NULL,
    tipo_documento text,
    documento text,
    dv text,
    primer_nombre text,
    segundo_nombre text NOT NULL,
    primer_apellido text NOT NULL,
    segundo_apellido text,
    fecha_nacimiento date NOT NULL,
    razon_social text NOT NULL,
    direccion text NOT NULL,
    celular integer NOT NULL,
    telefono integer NOT NULL,
    email character varying NOT NULL,
    tipo_tercero text NOT NULL
);
    DROP TABLE public.usuario;
       public         heap    postgres    false            ?            1259    16419    usuario_idusuario_seq    SEQUENCE     ?   CREATE SEQUENCE public.usuario_idusuario_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.usuario_idusuario_seq;
       public          postgres    false    215            ?           0    0    usuario_idusuario_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.usuario_idusuario_seq OWNED BY public.usuario.idusuario;
          public          postgres    false    214            e           2604    16423    usuario idusuario    DEFAULT     v   ALTER TABLE ONLY public.usuario ALTER COLUMN idusuario SET DEFAULT nextval('public.usuario_idusuario_seq'::regclass);
 @   ALTER TABLE public.usuario ALTER COLUMN idusuario DROP DEFAULT;
       public          postgres    false    214    215    215            ?          0    16420    usuario 
   TABLE DATA           ?   COPY public.usuario (idusuario, tipo_documento, documento, dv, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento, razon_social, direccion, celular, telefono, email, tipo_tercero) FROM stdin;
    public          postgres    false    215   ?       ?           0    0    usuario_idusuario_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.usuario_idusuario_seq', 49, true);
          public          postgres    false    214            g           2606    16427    usuario usuario_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (idusuario);
 >   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_pkey;
       public            postgres    false    215            ?   ?  x?m?Mn?0??O??d????](D??f???"\?h?T??9JY=?.?a? YІ¼??y?kl??a??eݴ?A??6D;??!Z???>a|???,?(e???ѥ?>L?FGP°M[?$F???j????]????h??;R*]???X????J????y?;2?:???o`YV??ob?}?T?6m??d???$?,? ???`?W,t??_?]???Q)?????O?c?!<1?d?Uhl???v?hJ??3~?#???????j????(?r8?_??R????J֠???='@??LC.?F?"q????Kip7DɆչ?Z?L?B?O\*?? ??9?$ngw$??G7ٔpGc8f`S?'D>??6|?C??????ם9????????(?????     
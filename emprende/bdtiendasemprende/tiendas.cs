using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Avelun_bd
{
    #region Tiendas
    public class Tiendas
    {
        #region Member Variables
        protected int _id;
        protected string _nombre;
        protected string _gerente;
        protected string _correo;
        protected string _pass;
        protected string _telefono;
        protected string _descripcion;
        protected string _direccion;
        protected string _pais;
        protected string _link;
        protected string _marcas_creadas;
        protected string _marcas_agregadas;
        protected unknown _fecha_registro;
        protected string _logo;
        #endregion
        #region Constructors
        public Tiendas() { }
        public Tiendas(string nombre, string gerente, string correo, string pass, string telefono, string descripcion, string direccion, string pais, string link, string marcas_creadas, string marcas_agregadas, unknown fecha_registro, string logo)
        {
            this._nombre=nombre;
            this._gerente=gerente;
            this._correo=correo;
            this._pass=pass;
            this._telefono=telefono;
            this._descripcion=descripcion;
            this._direccion=direccion;
            this._pais=pais;
            this._link=link;
            this._marcas_creadas=marcas_creadas;
            this._marcas_agregadas=marcas_agregadas;
            this._fecha_registro=fecha_registro;
            this._logo=logo;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Nombre
        {
            get {return _nombre;}
            set {_nombre=value;}
        }
        public virtual string Gerente
        {
            get {return _gerente;}
            set {_gerente=value;}
        }
        public virtual string Correo
        {
            get {return _correo;}
            set {_correo=value;}
        }
        public virtual string Pass
        {
            get {return _pass;}
            set {_pass=value;}
        }
        public virtual string Telefono
        {
            get {return _telefono;}
            set {_telefono=value;}
        }
        public virtual string Descripcion
        {
            get {return _descripcion;}
            set {_descripcion=value;}
        }
        public virtual string Direccion
        {
            get {return _direccion;}
            set {_direccion=value;}
        }
        public virtual string Pais
        {
            get {return _pais;}
            set {_pais=value;}
        }
        public virtual string Link
        {
            get {return _link;}
            set {_link=value;}
        }
        public virtual string Marcas_creadas
        {
            get {return _marcas_creadas;}
            set {_marcas_creadas=value;}
        }
        public virtual string Marcas_agregadas
        {
            get {return _marcas_agregadas;}
            set {_marcas_agregadas=value;}
        }
        public virtual unknown Fecha_registro
        {
            get {return _fecha_registro;}
            set {_fecha_registro=value;}
        }
        public virtual string Logo
        {
            get {return _logo;}
            set {_logo=value;}
        }
        #endregion
    }
    #endregion
}